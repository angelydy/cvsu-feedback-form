var currentQuestion = 1;
function submitBtnClick() {
  // Show the modal
  document.getElementById("myModal").style.display = "block";
  //blur the background
  document.getElementById("body-container").style.filter = "blur(5px)";
}

function noBtnClick() {
  // Hide the modal
  document.getElementById("myModal").style.display = "none";
  
  document.getElementById("body-container").style.filter = "blur(0px)";
}

function yesBtnClick() {
  // Hide the modal
  document.getElementById("myModal").style.display = "none";
  // Hide the current question
  document.getElementById("page-" + currentQuestion).style.display = "none";
  // Show the first question
  currentQuestion = 1;
  document.getElementById("page-" + currentQuestion).style.display = "block";
  //submit the form
  document.getElementById("questionnaire-form").submit();
}

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


