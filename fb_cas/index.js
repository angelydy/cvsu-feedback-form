var currentQuestion = 1;
function submitBtnClick() {
  // Show the modal only if the user answered the the email and number inputs
  var emailInput = document.getElementById("email").value;
  var numberInput = document.getElementById("stu_num").value;
  var dateInput = document.getElementById("date").value;
  if (emailInput == "" || numberInput == "" || dateInput == "") {
    //alert answer all required questions
    alert("Please answer all required questions.");
  } else {
    document.getElementById("myModal").style.display = "block";
    //blur the background
    document.getElementById("body-container").style.filter = "blur(5px)";
  }
}

function noBtnClick() {
  // Hide the modal
  document.getElementById("myModal").style.display = "none";
  window.location.href='index.html';
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