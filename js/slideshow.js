const startSlideshow = () => {
    let slideIndex = -1;

    const frontSlides = document.getElementById('mainSlideshow').getElementsByClassName("slide");
    const backgroundSlides = document.getElementById('backgroundSlideshow').getElementsByClassName("slide");
    const numOfSlides = frontSlides.length;

    function nextSlide() {
        for (let i = 0; i < numOfSlides; i ++) {
            frontSlides[i].style.opacity = 0;
            frontSlides[i].style.zIndex = 0;
            setTimeout(() => {
                backgroundSlides[i].style.opacity = 0;
                backgroundSlides[i].style.zIndex = -10;
            }, 500);
        }

        slideIndex === numOfSlides - 1 ? slideIndex = 0 : slideIndex ++;

        frontSlides[slideIndex].style.opacity = 1;
        frontSlides[slideIndex].style.zIndex = 1;

        setTimeout(()=> { 
            backgroundSlides[slideIndex].style.opacity = 1
            backgroundSlides[slideIndex].style.zIndex = -9;
        }, 500);
    }
    nextSlide();
    setInterval(nextSlide, 5000);
}

window.addEventListener('load', startSlideshow);

/*
function transitionSlides() {
    const frontSlides = document.getElementById('mainSlideshow').getElementsByClassName("slide");
    const backgroundSlides = document.getElementById('backgroundSlideshow').getElementsByClassName("slide");

    const numOfSlides = frontSlides.length;

    console.log('hi')
    console.log(frontSlides);

    for (let i = 0; true; i ++) {
        const slideIndex = i % 3;
        for (i = 0; i < numOfSlides; i++) { frontSlides[i].style.opacity = 0 };
        frontSlides[slideIndex].style.opacity = 1;
        setTimeout(()=> {
            for (i = 0; i < numOfSlides; i++) { backgroundSlides[i].style.opacity = 0 };
            backgroundSlides[slideIndex].style.opacity = 1;
        }, 500);
    }
}
*/
