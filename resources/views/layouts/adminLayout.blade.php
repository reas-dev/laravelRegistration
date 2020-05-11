<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/spotIT-logo.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('img/spotIT-logo.png') }}" type="image/x-icon" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer-custom.css') }}" media="screen,projection" />
    
    @yield('customStyle')
    @yield('customScript')

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
</head>

<body class="grey lighten-4">

    <nav>
        <div class="nav-wrapper">
          <a href="{{ url('/') }}" class="brand-logo center">@yield('panel_name')</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
                {{-- <li><a  class="dropdown-trigger" href="#" data-target="competition_controll">Fun Reward<i
                    class="material-icons right">arrow_drop_down</i></a></li>
                <li><a  class="dropdown-trigger" href="#" data-target="competition_controlll">Point Challenge<i
                    class="material-icons right">arrow_drop_down</i></a></li> --}}
                    <li><a  class="dropdown-trigger" href="#" data-target="competition_controllll">Menu<i
                        class="material-icons right">arrow_drop_down</i></a></li>
                {{-- <li><a href="{{ url('admin/profile') }}">Profile</a></li> --}}
                <li><a href="{{ url('logout') }}">Logout</a></li>
            </ul>
        </div>
    </nav>

    <ul id="competition_controllll" class="dropdown-content">
        <li><a href="{{ url('admin/') }}">List Peserta</a></li>
        <li><a href="{{ url('admin/lunasin') }}">Lunasin</a></li>
        <li><a href="{{ url('admin/hapus-gambar') }}">Hapus Gambar</a></li>
        <li><a href="{{ url('admin/hapus-peserta') }}">Hapus Peserta</a></li>
    </ul>
    {{-- <ul id="competition_controll" class="dropdown-content">
        <li><a href="{{ url('admin/FunReward/LuckyPong') }}">Lucky Pong</a></li>
    </ul>

    <ul id="competition_controlll" class="dropdown-content">
        <li><a href="{{ url('admin/PointChallenge/Ui-Ux') }}">Game UI/UX</a></li>
        <li><a href="{{ url('admin/PointChallenge/Photobooth') }}">Photobooth</a></li>
        <li><a href="{{ url('admin/PointChallenge/SingASong') }}">Sing a Song</a></li>
        <li><a href="{{ url('admin/PointChallenge/Follow-IG') }}">Follow IG</a></li>
    </ul> --}}

      <ul class="sidenav indigo darken-4" id="mobile-demo">
          <div class="background">
            <li><a class="waves-effect white-text text-indent" href="{{ url('admin/') }}">List Peserta</a></li>
            <li><a class="waves-effect white-text text-indent" href="{{ url('admin/lunasin') }}">Lunasin</a></li>
            <li><a class="waves-effect white-text text-indent" href="{{ url('admin/hapus-gambar') }}">Hapus Gambar</a></li>
            <li><a class="waves-effect white-text text-indent" href="{{ url('admin/hapus-peserta') }}">Hapus Peserta</a></li>
                <div class="divider"></div>
                <li><a class="waves-effect white-text" href="{{ url('logout') }}"><i
                class="material-icons white-text">power_settings_new</i>Logout</a></li>
          </div>
      </ul>

    <div class="mt-2">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        
        <script>
            M.AutoInit()
        </script>
    @yield('js')
</body>


</html>
