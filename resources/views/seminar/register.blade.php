@extends('layouts.homeLayout')

@section('title')
    REGISTER SPOT IT 2020
@endsection

@section('content')
    <div class="container mt-5">
        <form method="post" action="{{ url('/register') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="omrs-input-helper">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="instance" class="col-sm-2 col-form-label">Instansi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="instance" name="instance" value="{{ old('instance') }}">
                    @error('instance')
                    <span class="omrs-input-helper">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                  @error('email')
                  <span class="omrs-input-helper">{{ $message }}</span>
                  @enderror
                </div>
            </div>
            <div class="form-group row" >
                <label for="phone" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                  @error('phone')
                  <span class="omrs-input-helper">{{ $message }}</span>
                  @enderror
                </div>
            </div> 
            {{-- <div class="form-group row">
                <label for="payment" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="payment" name="payment">
                        <label class="custom-file-label" for="payment">Choose file (jpeg,png,jpg)</label>
                    </div>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary mb-2">Kirim</button>
        </form>
    </div>
@endsection

{{-- @section('js')
<script>
  $('#payment').on('change',function(){
      //get the file name
      var fileName = $(this).val().replace('C:\\fakepath\\', " ");
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection --}}