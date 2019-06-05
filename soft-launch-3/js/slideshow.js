/*global $ */

var slideIndex = 0;
showSlides();

function showSlides() {
    "use strict";
    var i,
        slides = document.getElementsByClassName("mySlides"),
        dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i += 1) {
        slides[i].style.display = "block";
    }
    slideIndex += 1;
    if (slideIndex > slides.length) {slideIndex = 1; }
    for (i = 0; i < dots.length; i += 1) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}