@extends('layouts.homeLayout') 

@section('content')
    <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-accent">
        <div class="container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/Logo.png') }}" height="35px" alt="">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 font-weight-bold">
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ups!</strong> data ada yang tidak valid, silahkan cek lagi.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="position-relative d-none d-lg-block min-vh-100 pt-5 mt-3">
            <div class="container position-relative justify-content-center">
                <img src="{{ asset('img/jumbotron.png') }}" class="w-100 position-relative m-0" alt="">
            </div>
        </div>

        <video class="video w-100 d-md-none" playsinline autoplay muted loop>
            <source src="{{ asset('video/teaser.mp4') }}" type="video/mp4">
        </video>

        <div class="container py-5">
            <div class="row" data-aos="fade-up">
                <div class="col-md order-lg-1 d-none d-lg-inline">
                    <video class="video w-100" playsinline autoplay muted loop>
                        <source src="{{ asset('video/teaser.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="col-md pl-md-5 order-lg-2 text-center text-md-left">
                    <h1 class="font-weight-bolder">
                        SEMNASTI
                    </h1>
                    <p class="mt-5">Semnasti merupakan acara Seminar Nasional Teknik Informatika yang diadakan oleh
                        Himpunan
                        Mahasiswa Teknik Informatika Universitas Dian Nuswantoro. Semnasti tahun ini bertemakan "Build
                        Cloud Technology on Application".</p>
                </div>
            </div>
        </div>


        <div class="container py-5 my-5">
            <div class="row text-center">
                <div class="col" data-aos="fade-up">
                    <h1 class="font-weight-bolder">Speakers</h1>
                </div>
            </div>

            <div class="row align-items-center" data-aos="fade-right">
                <div class="col-md-3 text-md-left text-center mb-3 mt-5">
                    <img class="img-fluid" src="{{ asset('img/pembicara1.png') }}" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col text-md-left text-center">
                            <h2 class="font-weight-bolder">
                                <p>DENY (JASOET) PRASETYO</p>
                            </h2>
                            <h3 class="mt-4">
                                <p>GoPay System automation<br>Lead at Gojek</p>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-md-left text-center">
                            <img src="{{ asset('img/gojek-logo.png') }}" height="35px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center" data-aos="fade-left">
                <div class="col-md-3 text-center text-md-right order-sm-2 mb-3 mt-5">
                    <img class="img-fluid" src="{{ asset('img/pembicara2.png') }}" alt="">
                </div>
                <div class="col-md-9 text-right order-sm-1">
                    <div class="row">
                        <div class="col text-center text-md-right">
                            <h2 class="font-weight-bolder">
                                <p>PETRA NOVANDI BARUS</p>
                            </h2>
                            <h3 class="mt-4">
                                <p>Senior Developer Advocate Indonesia<br>PT.Amazon Web Service Indonesia</p>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center text-md-right">
                            <img src="{{ asset('img/aws-logo.png') }}" height="50px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="register" class="pt-5"></div>
        <div class="container mt-5">
            <div class="row text-center" data-aos="fade-up">
                <div class="col-md-12">
                    <h1 class="font-weight-bolder">Register</h1>
                    <hr>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card py-3 shadow p-3 mb-5 bg-white rounded" data-aos="fade-up">
                        <div class="card-body pb-5 pt-3">
                            <form action="{{ url('/seminar/register') }}" method="POST">
                                @csrf
                                @method('post')
                                <div class="omrs-input-group">
                                    <label class="omrs-input-underlined @error('name') omrs-input-danger @enderror">
                                        <input type="text" name="name" value="{{ old('name') }}" required>
                                        <span class="omrs-input-label">Nama</span>
                                        @error('name')
                                        <span class="omrs-input-helper">{{ $message }}</span>
                                        @enderror
                                        <i class="material-icons">person</i>
                                    </label>
                                </div>
                                <div class="row" id="mahasiswa">
                                    <div class="col-md-12">
                                        <div class="omrs-input-group">
                                            <label class="omrs-input-underlined @error('instance') omrs-input-danger @enderror">
                                                <input type="text" name="instance" value="{{ old('instance') }}" required>
                                                <span class="omrs-input-label">Instansi</span>
                                                @error('instance')
                                                <span class="omrs-input-helper">{{ $message }}</span>
                                                @enderror
                                                <i class="material-icons">school</i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="omrs-input-group">
                                            <label class="omrs-input-underlined @error('phone') omrs-input-danger @enderror">
                                                <input type="text" name="phone" value="{{ old('phone') }}" required>
                                                <span class="omrs-input-label">Nomor Whatsapp</span>
                                                @error('phone')
                                                <span class="omrs-input-helper">{{ $message }}</span>
                                                @enderror
                                                <i class="material-icons">message</i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="omrs-input-group">
                                            <label class="omrs-input-underlined @error('email') omrs-input-danger @enderror">
                                                <input type="email" name="email" value="{{ old('email') }}" required>
                                                <span class="omrs-input-label">Email</span>
                                                @error('email')
                                                <span class="omrs-input-helper">{{ $message }}</span>
                                                @enderror
                                                <i class="material-icons">email</i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col text-center">
                                        <button class="mx-auto shadow-purp btn-register" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>

    <footer class="bg-accent p-3 mt-4" id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="row h-100 align-items-center">
                        <div class="col text-center">
                            <p class="copyright-text mt-3 mb-0">© 2020 Made By
                                <a href="https://hmtiudinus.org" class="text-decoration-none" target="_blank">Project
                                    Labs
                                    HMTI</a>
                            </p>
                        </div>
                    </div>
                    <div class="row text-white">
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection