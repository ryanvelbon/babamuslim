<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.edit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <h1>Welcome {{Auth::user()->username}}</h1>
  <div id="progressBar">
    <div class="fill"></div>
  </div>
  <form id="profileSetupForm" autocomplete="off" method="POST" action="{{ route('profile.edit') }}">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="tab">
      <h4>Set up your profile</h4>
      <input name="firstName" placeholder="first name">
      <input name="lastName" placeholder="last name">
    </div>

    <div class="tab">
      <?php 
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $current_year = (int) date("Y");
      ?>
      <h4>Birthday</h4>
      <div class="select">
        <select name="dd">
          @for($i = 1; $i <= 31; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>          
      </div>
      <div class="select">
        <select name="mm">
          @foreach($months as $month)
            <option value="{{ $loop->index + 1 }}">{{$month}}</option>
          @endforeach
        </select>
      </div>
      <div class="select">
        <select name="yyyy">
          @for($i = $current_year-13; $i >= $current_year-100; $i--)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>          
      </div> 
    </div>

    <div class="tab">
      <h4>Nationality</h4>
      <h5>I am from...</h5>
      <div class="select">
        <select name="nationality">
          @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->nicename }}</option>
          @endforeach
        </select>
      </div>
    </div>      
    
    <div class="tab">
      <h4>Describe yourself</h4>
      <textarea name="bio" class="custom-textarea" spellcheck="false" placeholder="Write something about yourself..."></textarea>
    </div>
    
    <div class="tab labels-on-left">
      <h4>Physique</h4>
      <label for="height"><h5>Height (cm)</h5></label>
      <input type="number" id="height" name="height" min="100" max="250"></input>
      <label for="weight"><h5>Weight (kg)</h5></label>
      <input type="number" id="weight" name="weight" min="30" max="250"></input>
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
        <input type="radio" id="salatY" value="yes" name="salat">
        <label for="salatY">Yes, I pray 5 times a day</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salatN" value="no" name="salat">
        <label for="salatN">No, I never pray.</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="salatSometimes" value="sometimes" name="salat">
        <label for="salatSometimes">I pray but I am not consistent.</label>
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
        <input type="radio" id="quran2" value="2" name="quranKnowledge">
        <label for="quran2">I can read Quran but have only memorized a few surah</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quran1" value="1" name="quranKnowledge">
        <label for="quran1">I cannot read Quran yet</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="quranKnowledgeNA" value="NA" name="quranKnowledge" checked>
        <label for="quranKnowledgeNA">I prefer not to answer</label>
      </p>
    </div>
    
    <!-- <div class="tab">
      <h4>Personality</h4>
      <h5>Which describes you best?</h5>
      <br>
      <input type="radio" id="romantic" name="" value="romantic">
      <label for="romantic">romantic</label><br>
      <input type="radio" id="realistic" name="" value="realistic">
      <label for="realistic">realistic</label><br>
    </div> -->
    
    <div class="tab">
      <h4>Marital Status</h4>
      <h5>I am currently...</h5>
      <p class="custom-radio">
        <input type="radio" id="single" value="single" name="relStatus">
        <label for="single">single</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="married" value="married" name="relStatus">
        <label for="married">married</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="divorced" value="divorced" name="relStatus">
        <label for="divorced">divorced</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="widowed" value="widowed" name="relStatus">
        <label for="widowed">widowed</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="relStatusNA" value="NA" name="relStatus" checked>
        <label for="relStatusNA">I prefer not to answer</label>
      </p>
    </div>

    <div class="tab">
      <h4>Kids</h4>
      <h5>Do you have any children? If so, how many?</h5>
      <h6>I have <input style="width: 50px; text-align: center;" type="number" min="0" max="10" placeholder="0" name="kids"> children</h6>
    </div>

    <div class="tab">
      <h4>Education</h4>
      <p class="custom-radio">
        <input type="radio" id="primary" value="primary" name="edu">
        <label for="primary">Primary Education</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="secondary" value="secondary" name="edu">
        <label for="secondary">Secondary Education</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="bachelor" value="bachelor" name="edu">
        <label for="bachelor">Bachelor's Degree</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="master" value="master" name="edu">
        <label for="master">Master's Degree</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="doctorate" value="doctorate" name="edu">
        <label for="doctorate">Doctorate</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="eduNA" value="NA" name="edu" checked>
        <label for="eduNA">I prefer not to answer</label>
      </p>
    </div>

    <div class="tab">
      <h4>Foobar</h4>
      <h5>Do you have any tattoos?</h5>
      <p class="custom-radio">
        <input type="radio" id="tattoosY" value="yes" name="tattoos">
        <label for="tattoosY">Yes</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="tattoosN" value="no" name="tattoos">
        <label for="tattoosN">No</label>
      </p>
      <p class="custom-radio">
        <input type="radio" id="tattoosNA" value="NA" name="tattoos" checked>
        <label for="tattoosNA">I prefer not to answer</label>
      </p>
    </div>

    <div class="tab">
      <h4>Foobar</h4>
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
      <h4>Foobar</h4>
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

    <!--    MEN   -->
    <div class="tab">
      <div class="autocomplete" style="width:300px;">
        <h4>Profession</h4>
        <h5>What is your profession?</h5>
        <input id="job" type="text" name="job" placeholder="Profession">
      </div>
    </div>

    <div class="tab">
      <h4>Profession</h4>
      <h5>What is your annual income?</h5>
      <div class="custom-slider">
        <input type="radio" name="salary" id="salary1" value="1" required>
        <label for="salary1" data-freq="< $10k"></label>
        <input type="radio" name="salary" id="salary2" value="2" required>
        <label for="salary2" data-freq="$10k-25k"></label>
        <input type="radio" name="salary" id="salary3" value="3" required>
        <label for="salary3" data-freq="$25k-50k"></label>
        <input type="radio" name="salary" id="salary4" value="4" required>
        <label for="salary4" data-freq="$50k-100k"></label>
        <input type="radio" name="salary" id="salary5" value="5" required>
        <label for="salary5" data-freq="$100k+"></label>
        <div class="freq-pos"></div>
      </div>        
    </div>

    

    <!-- <div class="tab">
      <p><input placeholder="Car"></p>
      <p><input placeholder="House"></p>
    </div> -->

    <div class="tab">
      <h4>Appearance</h4>
      <h5>Your hair color</h5>
      <div id="hairColor" class="color-palette">
        <ul>
          @foreach($hair_colors as $color)
            <li style="background: {{$color}};"></li>
          @endforeach
        </ul>
      </div>
    </div>


    <!--   WOMEN     -->

    

    
    
    <div class="buttons">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
    
    <!-- REMOVE THIS! But for some reason .buttons is not visible by Dusk without this -->
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
</body>
</html>

<script src="{{ asset('js/profile.edit.js') }}"></script>

<script src="{{ asset('js/autocomplete.js') }}"></script>
<script type="text/javascript">
  var professions = ["3-D Artist","A&R Coordinator","Accountant","Actor/Actress","Actuary","Administrative Assistant","Anesthesiologist","Animator","App Designer","Architect","Art Collector Consultant","Art Critic","Art Director","Art Director (for a magazine)","Art Teacher","Art Therapist","Audio/Visual Assistant","Auto Mechanic","Background Singer","Band Manager","Beautician","Beauty Editor","Billboard Designer","Biochemist","Biographer","Biomedical Engineer","Blogger/Content Writer","Bookkeeping, Accounting, & Audit Clerk","Brickmason & Blockmason","Bus Driver","Business Operations Manager","Businessman","Businesswoman","Buyer","Carpenter","Cartographer","Cartoonist","Cashier","Celebrity Booker","Cement Mason & Concrete Finisher","Child & Family Social Worker","Child and Family Social Worker","Chiropractor","Choreographer","Cinematographer","Civil Engineer","Clinical Laboratory Technician","Clinical Social Worker","Colorist","Compliance Officer","Composer","Computer Network Architect","Computer Programmer","Computer Support Specialist","Computer Systems Administrator","Computer Systems Analyst","Computer and Information Research Scientist","Concept Artist","Conductor","Construction Manager","Construction Worker","Copywriter","Cost Estimator","Costume Designer","Craft Artist","Creative Consultant","Creature Designer","Curator","Customer Service Representative","DJ","Dance Instructor","Data Scientist","Database Administrator","Delivery Truck Driver","Dental Assistant","Dental Hygienist","Dentist","Diagnostic Medical Sonographer","Dietitian and Nutritionist","Digital Product Designer","Director","Dubbing Mixer","Editor","Electrician","Elementary School Teacher","Entertainment Reporter","Entrepreneur","Environmental Engineer","Environmental Science and Protection Technician","Epidemiologist","Epidemiologist/Medical Scientist","Essayist","Esthetician and Skincare Specialist","Ethnomusicologist","Executive Assistant","Exterminator","Fabricator","Fashion Designer","Fashion Editor","Fashion Journalist","Fashion Merchandiser","Film Composer","Financial Advisor","Financial Analyst","Financial Manager","Firefighter","Flight Attendant","Footwear Designer","Forensic Science Technician","Fundraiser","Game Artist","Game Developer","Genetic Counselor","Geographer","Geoscientist","Ghostwriter","Glazier","Grant Proposal Writer","Graphic Designer","Graphic/Titles Designer","Greeting Card Writer","HR Specialist","Hair Stylist","Hairdresser","High School Teacher","Home Health Aide","IT Manager","Illustrator","Industrial Psychologist","Information Security Analyst","Information Security Analysts","Instrument Repair/Restoration Specialist","Instrumentalist","Insurance Agent","Insurance Sales Agent","Interpreter & Translator","Interpreter and Translator","Investor","Janitor","Landscaper & Groundskeeper","Landscaper and Groundskeeper","Lawyer","Loan Officer","Logistician","Logo Designer","Lyricist","MRI Technologist","Maid & Housekeeper","Maintenance & Repair Worker","Maintenance and Repair Worker","Make-up Artist","Management Analyst","Market Research Analyst","Marketing Manager","Marriage & Family Therapist","Marriage and Family Therapist","Massage Therapist","Materials Scientist","Mathematician","Mechanical Engineer","Medical Assistant","Medical Secretary","Medical and Health Services Manager","Meeting, Convention & Event Planner","Mental Health Counselor","Middle School Teacher","Mobile Designer","Multi-Media Artist","Music Director","Music Journalist","Music Producer","Music Teacher","Music Video Director","Musical Instrument Builder/Designer","Musician","Nail Technician","Newspaper Columnist","Nurse Anesthetist","Nurse Practitioner","Nursing Aide","Obstetrician and Gynecologist","Occupational Therapist","Occupational Therapy Assistant","Operations Research Analyst","Ophthalmic Medical Technician","Optometrist","Oral and Maxillofacial Surgeon","Orthodontist","Orthotist and Prosthetist","PR Associate","Painter","Painting Restorer","Paralegal","Paramedic","Patrol Officer","Pattern Maker","Pediatrician","Personal Care Aide","Petroleum Engineer","Pharmacist","Pharmacy Technician","Phlebotomist","Photo Editor","Photographer","Physical Therapist","Physical Therapist Aide","Physical Therapist Assistant","Physician","Physician Assistant","Piano Tuner","Pilot","Plumber","Podiatrist","Political Scientist","Postsecondary Engineering Teacher","Preschool Teacher","Private Music Teacher","Producer","Production Music Writer (TV Music)","Proofreader","Prop Maker","Prosthodontist","Psychiatrist","Psychologist","Public Relations Specialist","Radiologic Technologist","Real Estate Agent","Receptionist","Recreation & Fitness Worker","Recreation and Fitness Worker","Registered Nurse","Rehabilitation Counselor","Respiratory Therapist","Restaurant Cook","Sales Manager","Sales Representative","School Counselor","School Psychologist","Screenwriter","Seamstress","Security Guard","Set Decorator","Set Painting","Showroom Manager","Singer","Social and Community Service Manager","Software Developer","Sound Technician","Speech Writer","Speech-Language Pathologist","Sports Coach","Statistician","Storyboard Artist","Student","Substance Abuse Counselor","Substance Abuse and Behavioral Disorder Counselor","Surgeon","Tailor","Taxi Driver","Teacher Assistant","Technical Writer","Telemarketer","Textile Designer","Toy Designer","UI Developer","UX Designer","Unemployed","Veterinarian","Veterinary Technologist & Technician","Video Editor","Videographer","Voiceover Artist","Web Designer","Web Developer","Wind Turbine Technician","Writing Coach"];
  autocomplete(document.getElementById("job"), professions);
</script>
