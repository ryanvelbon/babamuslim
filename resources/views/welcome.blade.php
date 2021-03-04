<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/includes.footer.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="mainSection">
	  <div id="divA">
	    <h1>BABA <span>muslim</span></h1>
	    <h2>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</h2>
	    <button id="signupBtn">Register</button>
	  </div>
	  <div id="divB">
	    <form id="loginForm" action="/action_page.php">
	      <div class="container">
	      	<!-- we have to use distinct name and id attributes from those of the registration modal -->
	        <input type="text" placeholder="Email address" name="loginEmail" id="loginEmail" required>
	        <input type="password" placeholder="Password" name="loginPwd" id="loginPwd" required>

	        <button type="submit">Log in</button>
	      </div>
	      <div class="container signup">
	        <p>Don't have an account? <a href="#">Sign up</a>.</p>
	      </div>
	    </form>
	  </div>
	</div>
	@include('includes.footer')
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
                <button type="submit"><span>Continue</span></button>
                <input type="hidden" name="token" value="{{ Session::token() }}">
            </form>    
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    var modal = document.getElementById("regModal");
    var btn = document.getElementById("signupBtn");
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