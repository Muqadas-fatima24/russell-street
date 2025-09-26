// for scroll add is-sticky
document.addEventListener('DOMContentLoaded', function() {
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.main-navbar');
        const scrollPosition = window.scrollY;

        if (scrollPosition > 100) {
            header.classList.add('is-sticky');
        } else {
            header.classList.remove('is-sticky');
        }
    });
});


// adding body nav
document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.navbar-toggler');
    const body = document.body;

    toggler.addEventListener('click', function() {
        body.classList.toggle('body-nav');
    });
});


// hhhhhhhhhhhhh first simple carousel
document.addEventListener('DOMContentLoaded', function() {
     $('section.perfect-smile .perfect-smile-car').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayHoverPause: false,
        },
        600: {
            items: 2,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayHoverPause: false,
        }
    }
});
  });  

//   practice for something new before and after image in which the width is changeed by changing the value of input range value and width changes by it and left position of line also changes by it and also
document.addEventListener('DOMContentLoaded', function() {
    const sliderContainer = document.querySelector('.something-new');
    const sliderInput = document.querySelector('.slider');
    const sliderLine = document.querySelector('.slider-line');
    const sliderButton = document.querySelector('.slider-button');
    const beforeImage = document.querySelector('.image-before');

    // Function to update the slider position and clip-path
    function updateSlider(value) { 
        const percentage = value + '%';
        sliderContainer.style.setProperty('--position', percentage); // Corrected line
        sliderLine.style.left = percentage;
        sliderButton.style.left = percentage;
    }

    // Initial setup
    updateSlider(sliderInput.value);

    // Listen for slider input
    sliderInput.addEventListener('input', function() {
        updateSlider(this.value);
    });
});
// ........................
  // Show popup
  
  function showPopup() {
    document.getElementById("error-popup").style.display = "flex";
  }  

  // Hide popup
  function hidePopup() {
    document.getElementById("error-popup").style.display = "none";
  }
// use of session storage to store the flag of showpopup if all fields are valid after refresh if all the fields are valid then it store the flg showpopup to true  ansd give a slight refresh after refresh if memory have the the flag showpopup true then it shows popup and if fields are not valid then prevent the form to submit by prevent default 
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    // If popup flag is set from last submit show popup after refresh
    if (sessionStorage.getItem("showPopup") === "true") {
      showPopup();
      sessionStorage.removeItem("showPopup"); // clear flag
    }

    form.addEventListener("submit", function (event) {
      if (form.checkValidity()) {
        //  All fields valid set flag
        sessionStorage.setItem("showPopup", "true");
        // Allow normal refresh
      } else {
        // Block submit if invalid
        event.preventDefault();
        form.reportValidity();
      }
    });
  });

