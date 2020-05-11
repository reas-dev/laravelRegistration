<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Participant;
use Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminController extends Controller
{
    public function home(){
        $participants = Participant::sortable()->paginate(999);
        return view('admin.index')->with(compact('participants'));
    }
    
    public function viewLunasin(){
        $participants = Participant::sortable()->paginate(999);
        return view('admin.lunasin')->with(compact('participants'));
    }
    
    public function viewHapusGambar(){
        $participants = Participant::sortable()->paginate(999);
        return view('admin.imageRemove')->with(compact('participants'));
    }
    
    public function viewAbsent(){
        $participants = Participant::sortable()->paginate(999);
        return view('admin.theDay.absent')->with(compact('participants'));
    }

    public function absentBackup($postId){
        $attendance = Attendance::where('participant_id', $postId)->first();
        $participant = Participant::where('id',$attendance->participant_id)->first();
        if ($attendance != null){
            if ($attendance->attend == null){
                $attendance->attend = now()->addHours(7);
                $attendance->save();
                return redirect('/admin/the-day/absent')->with('status', 'success')->with('name', $participant->name)->with('id', $participant->id);
            }
            return redirect('/admin/the-day/absent')->with('status', 'invalid');
        }

        return redirect('/admin/the-day/absent')->with('status', 'invalid');
    }

    
    public function viewCertified(){
        $participants = Participant::sortable()->paginate(999);
        return view('admin.theDay.certified')->with(compact('participants'));
    }

    public function certifiedBackup($postId){
        $attendance = Attendance::where('participant_id', $postId)->first();
        $participant = Participant::where('id',$attendance->participant_id)->first();
        if ($attendance != null){
            if ($attendance->certified == null){
                $attendance->certified = now()->addHours(7);
                $attendance->save();
                return redirect('/admin/the-day/certified')->with('status', 'success')->with('name', $participant->name)->with('id', $participant->id);
            }
            return redirect('/admin/the-day/certified')->with('status', 'invalid');
        }

        return redirect('/admin/the-day/certified')->with('status', 'invalid');
    }
    
    ///lunasin
    public function lunasin($participantId){
        $participant = Participant::where('id', $participantId)->first();

        $code = $participant->upload_id;
        $email = $participant->email;
        $name = $participant->name;

        $participant->paid_status = 1;
        $participant->save();

        $qrcode =  QrCode::format('png')->size(250)->generate($code);

        $data = array(
                'name' => $name,
                'qrcode' => $qrcode,
                'code' => $code,
                );
        
        Mail::send('emails.confirm', $data, function($mail) use($email){
            $mail->to($email, 'fellas')
                 ->subject("SPOT IT 2020 CONFIRMATION");
            $mail->from('andreasyulianto3@gmail.com', 'HMTI Udinus');
        });

        if (Mail::failures()){
            return back();
        }

        return redirect('/admin/lunasin');
    }

    ///hapus gambar
    public function hapusGambar($participantId){
        $participant = Participant::where('id', $participantId)->first();

        $participant->payment = null;
        $participant->save();

        return redirect('/admin/hapus-gambar');
    }

    ///The Day of Semnasti
    public function QrAbsent(Request $request){
		$result =0;
           if ($request->data) {
            //    User::where('QRpassword',$request->data)->update(['name' => Reas]);
               $user = Participant::where('upload_id',$postId);
               if ($user) {
                   $result =1;
                }else{
                    $result =0;
                }
           }
           return $result;
    }
    ///absent
    public function absent(){
        return view('admin.AbsentScanner');
    }
    
    public function QrAttend(Request $request, $postId){
        $participant = Participant::where('upload_id',$postId)->first();
        $attendance = Attendance::where('participant_id', $participant->id)->first();

        if ($attendance != null){
            if ($attendance->attend == null){
                $attendance->attend = now()->addHours(7);
                $attendance->save();
                return redirect('/admin/QRScanner/absent')->with('status', 'success')->with('name', $participant->name)->with('id', $participant->id);
            }
            return redirect('/admin/QRScanner/absent')->with('status', 'invalid');
        }

        return redirect('/admin/QRScanner/absent')->with('status', 'invalid');
    }
    ///get certificate
    public function certified(){
        return view('admin.CertificateScanner');
    }

    public function QrCertified(Request $request, $postId){
        $participant = Participant::where('upload_id',$postId)->first();
        $attendance = Attendance::where('participant_id', $participant->id)->first();

        if ($attendance != null){
            if ($attendance->certified == null){
                $attendance->certified = now()->addHours(7);
                $attendance->save();
                return redirect('/admin/QRScanner/certified')->with('status', 'success')->with('name', $participant->name)->with('id', $participant->id);
            }
            return redirect('/admin/QRScanner/certified')->with('status', 'invalid');
        }

        return redirect('/admin/QRScanner/certified')->with('status', 'invalid');
    }
}
