var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    var i;
    var slides = document.querySelectorAll(".images-carousel");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }

  // Automatic image switching
  setInterval(function() {
    plusSlides(1);
  }, 3000); 


  const keywords = ["library", "CAS", "orange"];
  const searchInput = document.getElementById("search");
  const searchResults = document.getElementById("search-results");
  searchInput.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
      searchResults.innerHTML = "";
      const searchKeyword = searchInput.value;
      keywords.forEach(function(keyword) {
        if (keyword.includes(searchKeyword)) {
          const resultElement = document.createElement("a");
          resultElement.href = `https://cvsu-feedback-form.vercel.app/${keyword}`;
          resultElement.textContent = keyword;
          searchResults.appendChild(resultElement);
        }
      });
    }
  });