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
      <button id="continueBtn" type="button" onclick="nextPrev(1)" class="btn-xl">continue</button>
      <button type="button" onclick="" class="btn-lg">Not now. Maybe later.</button>
    </div>

    <div class="tab">
      <h4>Spirituality</h4>
      <h5>How long have you been Muslim?</h5>
      <p class="custom-radio">
        <input type="radio" id="born" value="born" name="muslimSince">
        <label for="born">I am Muslim since birth</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="convert" value="convert" name="muslimSince">
        <label for="convert">I am a convert</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="notYet" value="not yet" name="muslimSince">
        <label for="notYet">I am not Muslim yet</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="muslimSinceNA" value="NA" name="muslimSince" checked>
        <label for="muslimSinceNA">I prefer not to answer</label>
      </p>
    </div>

    <div class="tab">
      <h4>Spirituality</h4>
      <h5>Do you pray 5 times a day?</h5>
      <p class="custom-radio">
        <input type="radio" id="salat5" value="5" name="salat">
        <label for="salat5">Yes, I pray 5 times a day. I offer both the Fard and the Sunnah.</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salat4" value="4" name="salat">
        <label for="salat4">Yes, I pray 5 times a day but I only offer the Fard.</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salat3" value="3" name="salat">
        <label for="salat3">I pray but I sometimes miss some prayers due to work or negligence.</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salat2" value="2" name="salat">
        <label for="salat2">I am not consistent with my salat. I start and stop.</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salat1" value="1" name="salat">
        <label for="salat1">No, I currently do not pray.</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salatNA" value="NA" name="salat" checked>
        <label for="salatNA">I prefer not to answer</label>
      </p>
    </div>

    <div class="tab">
      <h4>Spirituality</h4>
      <h5>What is your knowledge of the Holy Quran?</h5>
      <p class="custom-radio">
        <input type="radio" id="quran5" value="5" name="quranKnowledge">
        <label for="quran5">I am Hafiz</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quran4" value="4" name="quranKnowledge">
        <label for="quran4">I know several Juz</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quran3" value="3" name="quranKnowledge">
        <label for="quran3">I know several surah</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quran2" value="2" name="quranKnowledge">
        <label for="quran2">I can read Quran but have only memorized a few surah</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quran1" value="1" name="quranKnowledge">
        <label for="quran1">I cannot read Quran yet</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quranNA" value="NA" name="quranKnowledge" checked>
        <label for="quranNA">I prefer not to answer</label>
      </p>
    </div>

    <div class="tab">
      <h4>Habits</h4>
      <h5>Do you smoke?</h5>
      <div class="custom-slider">
        <input type="radio" name="smokingFreq" id="smokingFreq1" value="1" required>
        <label for="smokingFreq1" data-freq="never"></label>
        <input type="radio" name="smokingFreq" id="smokingFreq2" value="2" required>
        <label for="smokingFreq2" data-freq="rarely"></label>
        <input type="radio" name="smokingFreq" id="smokingFreq3" value="3" required>
        <label for="smokingFreq3" data-freq="sometimes"></label>
        <input type="radio" name="smokingFreq" id="smokingFreq4" value="4" required>
        <label for="smokingFreq4" data-freq="often"></label>
        <input type="radio" name="smokingFreq" id="smokingFreq5" value="5" required>
        <label for="smokingFreq5" data-freq="very often"></label>
        <div class="freq-pos"></div>
      </div>
    </div>

    <div class="tab">
      <h4>Habits</h4>
      <h5>Do you drink?</h5>
      <div class="custom-slider">
        <input type="radio" name="drinkingFreq" id="drinkingFreq1" value="1" required>
        <label for="drinkingFreq1" data-freq="never"></label>
        <input type="radio" name="drinkingFreq" id="drinkingFreq2" value="2" required>
        <label for="drinkingFreq2" data-freq="rarely"></label>
        <input type="radio" name="drinkingFreq" id="drinkingFreq3" value="3" required>
        <label for="drinkingFreq3" data-freq="sometimes"></label>
        <input type="radio" name="drinkingFreq" id="drinkingFreq4" value="4" required>
        <label for="drinkingFreq4" data-freq="often"></label>
        <input type="radio" name="drinkingFreq" id="drinkingFreq5" value="5" required>
        <label for="drinkingFreq5" data-freq="very often"></label>
        <div class="freq-pos"></div>
      </div>        
    </div>

    <div class="tab">
      <h4>Foobar</h4>
      <h5>Do you have any tattoos?</h5>
      <p class="custom-radio">
        <input type="radio" id="tattoosY" value="1" name="tattoos">
        <label for="tattoosY">Yes</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="tattoosN" value="0" name="tattoos">
        <label for="tattoosN">No</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="tattoosNA" value="NA" name="tattoos" checked>
        <label for="tattoosNA">I prefer not to answer</label>
      </p>
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