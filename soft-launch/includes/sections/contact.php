<section id="contact" class="form" class=".span_12_of_12">
    <h2 class="formHeader">Contact Us</h2>
    
    <form id="contactForm" action="contact_form_process.php" method="POST">
        <p>Full Name:<br>
                <input type="text" name="fullName" placeholder="John Smith / Jane Smith">
        </p>
            
        <p>Email:<br>
            <input type="text" name="emailAddress" placeholder="johnsmith@somewhere.com">
        </p>
            
        <p>Are you an athlete, volunteer, or interested party?<br>
            <input type="radio" name="partyType" value="athlete">Athlete<br>
            <input type="radio" name="partyType" value="volunteer">Volunteer<br>
            <input type="radio" name="partyType" value="interestedParty">Interested Party
        </p>
        
        <p>Please type your question or comment here:<br>
            <textarea name="message" placeholder="Type message here..." rows="5" cols="40"></textarea>"<br>
            <input type="submit" value="Submit">
        </p>
    </form>
</section>