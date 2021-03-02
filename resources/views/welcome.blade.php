<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
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
    <div class="notification">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div id="regModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="regForm" autocomplete="off" method="POST" action="{{ route('register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h4>Sign up</h4>
                <input name="email" placeholder="email" value="{{old('email')}}" autocomplete="off">
                <input name="username" placeholder="username" value="{{old('username')}}" autocomplete="off">
                <input name="password" type="password" placeholder="password" autocomplete="off">
                <input name="password_confirmation" type="password" placeholder="confirm password" autocomplete="off">
                <button type="submit">Sign up</button>
                <input type="hidden" name="token" value="{{ Session::token() }}">
            </form>    
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    var modal = document.getElementById("regModal");
    var btn = document.getElementById("signupBtn1");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>
