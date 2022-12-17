  const searchInput = document.querySelector('input');
  const filterList = document.querySelector('#filter-list');
  
  searchInput.addEventListener('input', (event) => {
    const searchTerm = event.target.value;
    const options = filterList.querySelectorAll('a');
    let hasMatch = false;
  
    options.forEach((option) => {
      if (option.textContent.toLowerCase().includes(searchTerm.toLowerCase())) {
        hasMatch = true;
      }
    });
  
    filterList.style.display = (hasMatch) ? 'block' : 'none';
  });

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