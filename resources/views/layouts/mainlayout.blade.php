<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vinum</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/vinum.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,thin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <div class="mynavbar">
        <ul>

            <li><a href="#">OVER</a></li>
            <li><a href="{{ route('login') }}">LOGIN</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
            <li><a href="{{ route('register') }}">REGISTREER</a></li>
            <li><a href="#">WINKELMANDJE</a></li>
            <li>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</li>
            <li><a href="/"><img src = "{{ asset('img/vinumlogosmall.jpg') }}" alt="logosmall" height=40></a></li>
        </ul>
    </div>

    <div class="container-fluid maincontainer">
        <div class="row">
            <div class="col-md-6 containerleft pl-5 pr-3">
             <img src="{{ asset('img/vinumlogo.jpg') }}" alt="logo" height=240>
             <img src="{{ asset('img/slogan.png') }}" alt="slogan" >
                @yield('leftcontent')
            </div>

            <div class="col-md-6 containerright">
                @yield('rightcontent')
            </div> 
        </div> 
    </div> 
</body> 
</html>