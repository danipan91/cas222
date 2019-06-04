$(document).ready(function () {

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
    
});