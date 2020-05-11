@extends('layouts.homeLayout') 

@section('content')
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-accent" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" class="text-decoration-none">
                {{-- <img src="{{ asset('img/Logo.png') }}" height="35px" alt=""> --}}
                <div class="d-flex">
                    <img src="{{ asset('img/spotIT-logo.png') }}" height="35px" alt="">
                    <h4 class="text-primary mx-3 text-stroke"><b>SPOT IT</b></h4>
                </div>
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

    <div id="home" class="mt-0 pt-0">
        <div class="bg-memphis">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ups!</strong> data ada yang tidak valid, silahkan cek lagi.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="position-relative min-vh-80 pt-5 text-white">
                <div class="container position-relative justify-content-center">
                    {{-- <img src="{{ asset('img/jumbotron.png') }}" class="w-100 position-relative m-0" alt=""> --}}
                    <div class="row mt-5 pt-3 align-items-center">
                        <div class="col-md order-2 order-md-1 text-center text-md-left my-md-0 my-5">
                            <img class="img-fluid" src="{{ asset('img/icon-landing.png') }}" alt="">
                        </div>
                        <div class="col-md order-1 order-md-2 text-center text-md-left">
                            <h1 class="bg-text d-inline"><b>SPOT IT</b></h1>
                            <h5 class="text-light mt-3">Speak About IT</h5>
                            <br>
                            <h3><u>Change the world with technology</u></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1915 430"><defs><style>.cls-1,.cls-2,.cls-3{fill:#fff;}.cls-1{opacity:0.7;}.cls-2{opacity:0.7;}</style></defs><title>wave1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M0,309.22a548.7,548.7,0,0,1,188-74c21.42-4.06,86.18-15,178-4,174.16,20.88,215.07,93.06,378,120,22.82,3.78,105.34,16.14,199,2,291.24-44,366.27-260.8,644-333,69.61-18.09,180.63-34.14,332-1v413H0Z"/><path class="cls-2" d="M0,322.22c40.13-25.28,106.26-60.07,194-76,29.56-5.36,79.78-11.89,149-6,186.41,15.89,245.79,99.34,400,131,125.43,25.76,228.8-.15,288-15,240.65-60.33,283.44-208.27,500-282,80.06-27.25,207.32-52.34,388-15v373H0Z"/><path class="cls-3" d="M0,335.22a566.4,566.4,0,0,1,192-75c25.85-4.9,92.51-15.65,185-4,179.39,22.6,221.31,99.9,374,131,111.6,22.74,201.64,4.35,267-9,291-59.42,351.78-251.24,613-298,62.31-11.15,159.83-18.31,288,16v336H0Z"/></g></g></svg>
            </div>
        </div>

        {{-- <video class="video w-100 d-md-none mt-5" playsinline autoplay muted loop>
            <source src="{{ asset('video/teaser.mp4') }}" type="video/mp4">
        </video> --}}

        {{-- <div class="container py-5">
            <div class="row" data-aos="fade-up">
                <div class="col-md pl-md-5 order-lg-2 text-center text-md-left d-md-none">
                    <h1 class="font-weight-bolder">
                        SEMNASTI
                    </h1>
                    <p class="mt-5">Semnasti merupakan acara Seminar Nasional Teknik Informatika yang diadakan oleh
                        Himpunan
                        Mahasiswa Teknik Informatika Universitas Dian Nuswantoro. Semnasti tahun ini bertemakan "Build
                        Cloud Technology on Application".</p>
                </div>
            </div>
        </div> --}}

        <div class="bg-memphis2">
            <div class="container py-5 mt-5" data-aos="fade-up">
                <div class="row">
                    {{-- <div class="col-md order-lg-1 d-none d-lg-inline">
                        <video class="video w-100" playsinline autoplay muted loop>
                            <source src="{{ asset('video/teaser.mp4') }}" type="video/mp4">
                        </video>
                    </div> --}}
                    <div class="col text-center {{-- d-none d-lg-inline --}}">
                        <h1 class="bg-text d-inline">
                            <b>SPOT IT</b>
                        </h1>
                        <p class="mt-5">Speak About IT <u>(SPOT IT)</u> merupakan acara Seminar Online yang membahas seputar Teknologi Informasi yang diadakan oleh Himpunan Mahasiswa Teknik Informatika Universitas Dian Nuswantoro. SPOT IT 2020 merupakan acara perdana yang diadakan dengan mengusung tema <u>Develop Career in Cloud Computing Era</u>.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918 247.5"><defs><style>.cls-1{fill:#f8f9fa;}</style></defs><title>line-top</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M1918,247.5H0v-50L1917.5,0Q1917.76,123.75,1918,247.5Z"/></g></g></svg>
            <div class="bg-light py-3">
                <div class="container">
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
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918 247.5"><defs><style>.cls-1{fill:#f8f9fa;}</style></defs><title>line-bottom</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M0,0H1918V50L.5,247.5Q.25,123.75,0,0Z"/></g></g></svg>
        </div>

        <div id="register" class="pt-5"></div>
        <div class="bg-dashed">
            <div class="container mt-5">
                <div class="row text-center" data-aos="fade-up">
                    <div class="col-md-12">
                        <h1 class="font-weight-bolder">Register</h1>
                    </div>
    
                </div>
    
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3">
                        <div class="card py-3 shadow my-5 bg-white rounded" data-aos="fade-up">
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
                                                    <i class="material-icons">layers</i>
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
    </div>

    <footer class="bg-accent p-3 mt-4" id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="row h-100 align-items-center">
                        <div class="col text-center">
                            <p class="copyright-text mt-3 mb-0 text-light">© 2020 Made By
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

@section('js')
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
            $('#navbar').addClass('shadow');
        } else {
            $('#navbar').removeClass('shadow');
        }
        }
    </script>
@endsection