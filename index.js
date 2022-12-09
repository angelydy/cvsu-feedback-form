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