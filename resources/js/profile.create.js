var currentTab = 0;
progress = 0; // represents a percentage
var tabs = document.getElementsByClassName("tab");
var incr = 100/tabs.length; // incrementation for progress


showTab(currentTab);

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").style.display = "inline";
  }
}

/* The reason why we haven't declared this function like so "function nextPrev(n)" is due to:
 *    https://stackoverflow.com/questions/46643667/javascript-function-is-not-defined-with-laravel-mix
 */
window.nextPrev = function (n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }

  // show tab
  showTab(currentTab);
  
  // update progress bar
  var prog = document.getElementById("progressBar");
  var fill = prog.querySelector('.fill');
  if(window.event.target.id == 'nextBtn')
    progress += incr;
  else if(window.event.target.id == 'prevBtn')
    progress -= incr;
  fill.style.width = progress + "%";
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  return valid; // return the valid status
}