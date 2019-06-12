<!-- hero image/slideshow for tablet/dekstop versions only -->    
<div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 4</div> -->
  <img src="images/swim_1.jpg" style="width:100%">
  <div class="text">Triathlon Swimmers</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 4</div> -->
  <img src="images/cyclists_2.jpg" style="width:100%">
  <div class="text">Long Course Bike Riders</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 4</div> -->
  <img src="images/runners_3.jpg" style="width:100%">
  <div class="text">Half Marathon Runners</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">4 / 4</div> -->
  <img src="images/competition-4.jpg" style="width:100%">
  <div class="text">Long Course Swimmers</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
</script>