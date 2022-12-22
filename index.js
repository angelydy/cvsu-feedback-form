const searchInput = document.querySelector('input');
const filterList = document.querySelector('#filter-list');

  searchInput.addEventListener('input', (event) => {
    const searchTerm = event.target.value;
    const options = filterList.querySelectorAll('a');
    let hasMatch = false;
    
    if (searchTerm === '') {
      filterList.style.display = 'none';
      return;
    }

    for (let i = 1; i < options.length; i++) {
      if (options[i].textContent.toLowerCase().includes(searchTerm.toLowerCase())) {
        options[i].style.display = '';
        hasMatch = true;
      } else {
        options[i].style.display = 'none';
      }
    }
  
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

  // For arrow up
  let mybutton = document.getElementById("myBtn");

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


  //animation scroll up

  gsap.registerPlugin(ScrollTrigger);
// REVEAL //
gsap.utils.toArray(".revealUp").forEach(function (elem) {
  ScrollTrigger.create({
    trigger: elem,
    start: "top 80%",
    end: "bottom 20%",
    markers: true,
    onEnter: function () {
      gsap.fromTo(
        elem,
        { y: 100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeave: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    },
    onEnterBack: function () {
      gsap.fromTo(
        elem,
        { y: -100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeaveBack: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    }
  });
});