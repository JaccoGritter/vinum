<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vinum</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/vinum.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,thin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
    <div class="mynavbar">
        <ul>

            <li><a href="#">OVER</a></li>
            <li><a href="#">LOGIN</a></li>
            <li><a href="#">LOGOUT</a></li>
            <li><a href="#">REGISTREER</a></li>
            <li><a href="#">WINKELMANDJE</a></li>
            <li>Guest</li>
            <li><a href="#"><img src="img/vinumlogosmall.jpg" alt="logosmall" height=40></a></li>
        </ul>
    </div>

    <div class="container-fluid maincontainer">
        <div class="row">
            <div class="col-md-6 containerleft pl-5 pr-5">
             <img src="img/vinumlogo.jpg" alt="logo" height=240>
             <img src="img/slogan.png" alt="slogan" >
                @yield('leftcontent')
            </div>

            <div class="col-md-6 containerright">
                @yield('rightcontent')
            </div> 
        </div> 
    </div> 
</body> 
</html>