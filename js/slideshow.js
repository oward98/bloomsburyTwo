function startSlideshow() {
    var slideIndex = -1;

    var frontSlides = document.getElementById('mainSlideshow').getElementsByClassName("slide");
    var backgroundSlides = document.getElementById('backgroundSlideshow').getElementsByClassName("slide");
    var numOfSlides = frontSlides.length;

    function nextSlide() {
        for (var i = 0; i < numOfSlides; i ++) {
            frontSlides[i].style.opacity = 0;
            frontSlides[i].style.zIndex = 0;
            setTimeout(function() {
                backgroundSlides[i].style.opacity = 0;
                backgroundSlides[i].style.zIndex = -10;
            }, 500);
        }

        slideIndex === numOfSlides - 1 ? slideIndex = 0 : slideIndex ++;

        frontSlides[slideIndex].style.opacity = 1;
        frontSlides[slideIndex].style.zIndex = 1;

        setTimeout(function() { 
            backgroundSlides[slideIndex].style.opacity = 1
            backgroundSlides[slideIndex].style.zIndex = -9;
        }, 500);
    }
    nextSlide();
    setInterval(nextSlide, 5000);
}

window.addEventListener('load', startSlideshow);