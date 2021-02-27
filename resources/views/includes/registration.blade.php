<div id="regModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <form id="regForm" action="">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="tab">
        <h4>Sign up</h4>
        <input name="email" placeholder="email" autocomplete="off">
        <input name="username" placeholder="username" autocomplete="off">
        <input name="password" type="password" placeholder="password" autocomplete="off">
      </div>
      
      <div class="tab">
        <h4>Set up your profile</h4>
        <input name="firstName" placeholder="first name">
        <input name="lastName" placeholder="last name">
      </div>

      <div class="tab">
        <h4>Birthday</h4>
        <input name="dd" placeholder="dd">
        <input name="mm" placeholder="mm">
        <input name="yyyy" placeholder="yyyy">
      </div>
      
      <div class="tab">
        <h4>Nationality</h4>
        <p>I am from...</p>
        <input name="nationality" placeholder="nationality">
      </div>
      
      <div class="tab">
        <h4>Describe yourself</h4>
        <textarea name="bio" rows="5" placeholder="write something..." spellcheck="false"></textarea>
      </div>
      
      <div class="tab">Physique:
        <label for="height">Height (cm)</label>
        <input type="number" id="height" name="height" min="100" max="250"></input>
        <label for="weight">Weight (kg)</label>
        <input type="number" id="weight" name="weight" min="30" max="250"></input>
        <label for="skin">Skin</label>
        <select name="skin" id="skin">
          <option value="white">white</option>
          <option value="brown">brown</option>
          <option value="black">black</option>
          <option value="tanned">tanned</option>
        </select>
        <label for="eyes">Eye Color</label>
        <select name="eyes" id="eyes">
          <option value="brown">brown</option>
          <option value="black">black</option>
          <option value="blue">blue</option>
          <option value="green">green</option>
        </select>
      </div>
      
      <div class="tab">Spirituality:
        <p></p>
        <input type="radio" id="born" name="bornOrConvert" value="born">
        <label for="born">I am born Muslim</label><br>
        <input type="radio" id="convert" name="bornOrConvert" value="convert">
        <label for="convert">I am a convert</label><br>
        <input type="radio" id="na" name="bornOrConvert" value="na" checked>
        <label for="na">prefer not to answer</label>
        
        <p>Do you pray 5 times a day?</p>
        <input type="radio" id="yes" name="salat" value="yes">
        <label for="yes">yes</label><br>
        <input type="radio" id="no" name="salat" value="no">
        <label for="no">no</label><br>
        <input type="radio" id="na" name="salat" value="na" checked>
        <label for="na">prefer not to answer</label>
        <p>Quran</p>
        
      </div>
      
      <div class="tab">Which describes you best?
        <br>
        <input type="radio" id="romantic" name="" value="romantic">
        <label for="romantic">romantic</label><br>
        <input type="radio" id="realistic" name="" value="realistic">
        <label for="realistic">realistic</label><br>
      </div>
      
      <div class="tab">Marital Status:
        <input type="radio" id="single" name="relStatus" value="single">
        <label for="single">single</label>
        <input type="radio" id="married" name="relStatus" value="married">
        <label for="married">married</label>
        <input type="radio" id="divorced" name="relStatus" value="divorced">
        <label for="divorced">divorced</label>
        <input type="radio" id="na" name="relStatus" value="na" checked>
        <label for="na">prefer not to answer</label>
      </div>
      
      <!--    MEN   -->
      <div class="tab">Salary:
        <p><input placeholder="Profession"></p>
        <p><input placeholder="Annual Income"></p>
        <p><input placeholder="Car"></p>
        <p><input placeholder="House"></p>
      </div>      
      <!--   WOMEN     -->
      <div class="tab">
        <p>I have <input type="number" min="0" max="10" placeholder="0"> children</p>
      </div>
      

      
      
      
      

      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>

      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
      <input type="hidden" name="token" value="{{ Session::token() }}">
      </form>    
  </div>
</div>