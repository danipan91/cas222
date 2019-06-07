<section id="faqs" class=".span_12_of_12">
        <!-- FAQS -->
        <h2>FAQS</h2>
        
        <button class="accordion">What are the Rules?</button>
        <div class="panel">
          <p>We currently adhere to the USAT Rules for Triathlon & Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>
        </div>

        <button class="accordion">Can I use a personal music device while cycling?</button>
            <div class="panel">
              <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>
            </div>

        <button class="accordion">Can I use a personal music device while running?</button>
            <div class="panel">
              <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>

              <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings.</p>

              <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>

              <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>
            </div>

        <button class="accordion">Do I need a wetsuit?</button>
            <div class="panel">
              <p>?  No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>
            </div>

        <button class="accordion">Do I have to use a road or racing bike?</button>
            <div class="panel">
              <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
            </div>
</section>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
</script>