<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Participant;
use Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ParticipantController extends Controller
{
    // public function register()
    // {
    //     return view('seminar/register');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'instance' => 'nullable|min:2|max:100',
            'phone' => 'required|min:8|max:14|unique:participants',
            'email' => 'required|min:10|max:50|email:rfc|unique:participants'
        ]);

        $code = $this->encryptCode($request->phone);
        $count = Participant::where('upload_id', $code)->count();
        while ($count != 0)
        {
            $code = $this->encryptCode($request->phone);
            $count = Participant::where('upload_id', $code)->count();
        }
        
        $user = Participant::create([
            'upload_id' => $code,
            'name' => $request->name, 
            'instance' => $request->instance,
            'email' => $request->email,
            'phone' => $request->phone,
            'paid_status' => 0
        ]);
        
        
        Attendance::create([
            'participant_id' => $user->id,
            'attend' => null,
            'certified' => null
        ]);
        
        $qrcode =  QrCode::format('png')->size(250)->generate($code);

        $email = $request->email;
        $data = array(
                'name' => $request->name,
                'qrcode' => $qrcode,
                'code' => $code,
                );
        
        Mail::send('emails.register', $data, function($mail) use($email){
            $mail->to($email, 'fellas')
                 ->subject("SPOT IT 2020 REGISTRATION");
            $mail->from('andreasyulianto3@gmail.com', 'HMTI Udinus');
        });

        if (Mail::failures()){
            return back();
        }

        return redirect ('/upload/'. $code);
    }

    public function viewDestroy(){
        $participants = Participant::sortable()->paginate(999);
        return view('admin.hapusPeserta')->with(compact('participants'));
    }

    public function destroy($participantId){
        $participant = Participant::where('id', $participantId)->delete();
        return redirect ('/admin/hapus-peserta');
    }

    public function showUploadProfile(Request $request, $uploadId)
    {
        $request->session()->pull('done');
        $participant = Participant::where('upload_id', $uploadId)->firstOrFail();
        if($participant->paid_status == 1){
            $request->session()->flash('done', 1);
        }
        if($participant->payment && $participant->paid_status == 0){
            $request->session()->flash('confirm', 1);
        }
        return view('seminar/fileUpload', ['participant' => $participant]);
    }

    public function uploadProfile(Request $request, $uploadId)
    {
        $request->validate([
            'payment' => 'image|mimes:jpeg,png,jpg|max:1024'
        ]);
        if ($request->file('payment'))
        {
            $file_payment = $request->file('payment');
            $upload_destination_payment = 'data_file/seminar/payment';
            $file_name_payment = "seminar_".$uploadId .".".$file_payment->getClientOriginalExtension();
            $file_payment->move($upload_destination_payment,$file_name_payment);

            $payment_loc = "/data_file/seminar/payment/".$file_name_payment;

            Participant::where('upload_id', $uploadId)
            ->update([
                'payment' => $payment_loc
            ]);
        }
        return redirect ('/upload/'. $uploadId);
    }

    public function encryptCode($code)
    {
        $code = str_replace(' ','_', $code);
        $code = preg_replace('/[^\p{L}\p{N}\s]/u', "", $code);
        $code = str_shuffle($code);
        $code = 'SNTI' . $code;
        return $code;
    }
}
