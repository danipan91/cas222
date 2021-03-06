/*global $ */

$(document).ready(function () {
    "use strict";
    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").click(function () {
        $(".menu").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(function () {
        $(".menu").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });
    
    if (window.matchMedia("(min-width: 1025px)").matches) {
        $(".menu").show();
    }
    
});