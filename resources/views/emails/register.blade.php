<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="card" style="width: 18rem;">
    <h5 class="card-title mx-auto">Hi, {{ $name }}!</h5>
    <div class="card-body text-center">
        <p>Selamat, anda sudah terdaftar di SPOT IT 2020.</p>
        <br>
        <p>Biaya Pendaftaran : 20K</p>
        <p>BCA : 0152479903 (Era Kurnia)</p>
        <p>BNI : 0909460682 (Nurun Najmi Amanina)</p>
        <p>GOPAY : 0813-1747-6244 (Andreas)</p>
        <br>
    	  <p>Silahkan konfirmasi pembayaran melalui link berikut.</p>
        <a href="{{ url('/seminar/upload/' . $code) }}">{{ url('/seminar/upload/' . $code) }}</a>
    	  <p>bisa juga konfirmasi melalui Whatsapp (0812 2919 3881 - Ana) </p>
        <p>See You Soon!</p>
    </div>
  </div>
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>