<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vinum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/vinum.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,thin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <div class="mynavbar">
        <ul>

            <li><a href="{{ route('about') }}">OVER</a></li>
            <li><a href="{{ route('login') }}">LOGIN</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
            <li><a href="{{ route('register') }}">REGISTREER</a></li>

            <li>
                <a href="{{ route('cart') }}"><i class="fas fa-shopping-basket fa-2x"></i></a>
                <b>{{ Auth::check() ? Auth::user()->getCartQuantity() : '' }}</b>
            </li>

            <li>{{ Auth::check() ? Auth::user()->name : 'Guest' }}</li>
            <li><a href="/"><img src = "{{ asset('img/vinumlogosmall.jpg') }}" alt="logosmall" height=40></a></li>
        </ul>
    </div>

    <div class="container maincontainer pr-4">
        <div class="row">
            <div class="col-md-6 containerleft pl-5 pr-1">
             <img src="{{ asset('img/vinumlogo.jpg') }}" alt="logo" height=240 class="checkwidth">
             <img src="{{ asset('img/slogan.png') }}" alt="slogan" height=150 class="checkwidth">
                @yield('leftcontent')
            </div>

            <div class="col-md-6 containerright">
                @yield('rightcontent')
            </div> 
        </div> 
    </div> 
</body> 
</html>