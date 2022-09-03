<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> --}}

        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <title>PPP - App / @yield('title')</title>

        <style type="text/css">
            @media only screen and (max-width: 576px) {
                .logo-mini {
                    margin-top: auto;
                    margin-bottom: auto;
                }
            }

            .navbar a, .navbar button{
                color: #006811 !important;
            }

            .custom-toggler.navbar-toggler {
            border-color: #006811;
            }
            
            .custom-toggler .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 104, 17, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }

            .jumbotron{
                border-radius: 0px;
                width: 100%s
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(0, 104, 17, 1)), url({{asset('img/bg-2.jpg')}});
                
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg " style="background-color: #fff; ">
        <div class="container">
            <a class="navbar-brand align-self-center" href="#">
            <img src="{{ asset('img/ppp_logo.png')}}" width="65" height="65" class="d-inline-block align-top float-left" alt="">
            <div class="home-header-text d-none d-md-block float-left mx-3 my-2 align-middle">
                <h5>SIAPPP</h5>
                <h6>Sistem Informasi Analisis Progres PPP</h6>
            </div>
            <span class="logo-mini d-sm-block d-md-none ">PPP - Partai Persatuan</span>
            </a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link btn-success" href="{{ url('user/login') }}" id="">Login</a>
                </li>
            </ul>
            </div>
        </nav>

    @yield('content')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>