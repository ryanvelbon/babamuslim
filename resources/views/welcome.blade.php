<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="jumbotron">
        <img src="{{asset('img/cover2.jpg')}}">
        <div id="overlay"></div>
        <div class="header">
            <h1>BABA muslim</h1>
            <a href="">Sign up</a>
            <button id="login-btn">Log in</button>
        </div>
        <div class="content-center">
            <h1>BABA muslim</h1>
            <h2>Find your perfect husband</h2>
            <button id="signupBtn1">Register</button>
        </div>
    </div>
    @include('includes.registration')
</body>
</html>

<script src="{{ asset('js/registration.js') }}"></script>
