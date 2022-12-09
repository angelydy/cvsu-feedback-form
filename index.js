function validateForm() {
  // Get all the radio buttons
  var radioButtons = document.querySelectorAll('input[type="radio"]');
  // Loop through the radio buttons and check if any of them are selected
  var selected = false;
  for (var i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].checked) {
      selected = true;
      break;
    }
  }
  // If none of the radio buttons are selected, show an error message and prevent the form from being submitted
  if (!selected) {
    alert('Please select an option for each criteria.');
  }
  else {
    showNextPage();
  }
}

var currentQuestion = 1;

function showNextPage() {
  //Hide the current question  
  document.getElementById("page-" + currentQuestion).style.display = "none";
  // Show the next question
  currentQuestion++;
  document.getElementById("page-" + currentQuestion).style.display = "block";
  
}

function showPreviousPage() {
  // Hide the current question
  document.getElementById("page-" + currentQuestion).style.display = "none";

  // Show the previous question
  currentQuestion--;
  document.getElementById("page-" + currentQuestion).style.display = "block";
}