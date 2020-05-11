@extends('layouts.homeLayout')

@section('title')
    REGISTER SPOT IT 2020
@endsection

@section('content')
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Hai, {{ $participant->name }}!</h1>
                <br>
                <h1 class="font-weight-lighter sub-font1">
                    @if (Session::has('done'))
                    Kamu sudah melengkapi persyaratan yang diperlukan. <br>Terimakasih.
                    @elseif (Session::has('confirm'))
                    Persyaratan sudah lengkap.<br> Silahkan menunggu konfirmasi dari admin.
                    @else
                    Silahkan melengkapi persyaratan yang diperlukan.
                    @endif
                </h1>
            </div>
            <div class="col-12 mt-3">
                <form method="post" action="{{ url('upload/' . $participant->upload_id)}}" enctype="multipart/form-data">
                    @csrf   
                    @if ($participant->paid_status == 0 && !$participant->payment)
                        @if (!$participant->payment)
                        <div class="form-group row">
                            <label for="payment" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="payment" name="payment">
                                    <label class="custom-file-label" for="payment">Choose file (jpeg,png,jpg)</label>
                                    @error('payment')
                                    <span class="omrs-input-helper text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @endif
                        <button class="btn btn-primary" type="submit"><b>Submit</b></button>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
  $('#payment').on('change',function(){
      //get the file name
      var fileName = $(this).val().replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection