/*global $ */

/* $(document).ready(function () {
    "use strict";
    $(".panel").hide();
    $(".accordion").click(function () {
        $(".panel").slideToggle("slow", function () {
            $(".panel").show();
        });
    });

    $(".accordion").click(function () {
        $(".panel").slideToggle("slow", function () {
            $(".panel").hide();
        });
    });
    
}); */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i += 1) {
    acc[i].addEventListener("click", function () {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
        "use strict";
        this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
