<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.create.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <h1>Welcome {{Auth::user()->username}}</h1>
  <div id="progressBar">
    <div class="fill"></div>
  </div>
  <form id="profileSetupForm" autocomplete="off" method="POST" action="{{ route('profile.update.extra') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">

    <div class="tab">
      <h4>Personality Quiz</h4>
      <h5>Increase your chances of matching with someone by taking our personality quiz!</h5>
      <button type="button" onclick="nextPrev(1)" class="btn-xl">Start quiz</button>
      <button type="button" onclick="" class="btn-lg">Not now. Maybe later.</button>
    </div>



   


    <div class="tab">
      <h4>That's everything!</h4>
      <button type="submit">Submit now</button>
    </div>

    <div class="buttons">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
    
    <input type="hidden" name="token" value="{{ Session::token() }}">

    </form>
</body>
</html>

<script src="{{ asset('js/profile.create.js') }}"></script>