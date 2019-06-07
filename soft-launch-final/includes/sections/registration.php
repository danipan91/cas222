<section id="registration" class=".span_12_of_12">
    <!-- Registration Info and Form -->
    <h2>Registration</h2>
    
        <h4>Event Categories + Cost(s)</h4>
        <table>
            <tr>
                <th>Activity</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td>Long Course</td>
                <td>$240</td>
            </tr>
            
            <tr>
                <td>Olympic</td>
                <td>$110</td>
            </tr>
            
            <tr>
                <td>10K</td>
                <td>$50</td>
            </tr>
            
            <tr>
                <td>Half Marathon</td>
                <td>$75</td>
            </tr>
            
            <tr>
                <td>Sprint</td>
                <td>$90</td>
            </tr>
            
            <tr>
                <td>Try-a-Tri</td>
                <td>$65</td>
            </tr>        
        </table>
    
        <h3>Cost Includes:</h3>
        <ul>
            <li>Food and beer</li>
            <li>to the weekend’s live entertainment & Fitness Expo</li>
            <li>Commemorative Finisher medal</li>
            <li>Accurate Chip Timing for competitive races</li>
            <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
            <li>Post-event party & entertainment</li>
        </ul>
    
        <h3>Starting Times</h3>
        
        <h4>Saturday</h4>
        <table>
            <tr>
                <th>Activity</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Long Course Triathlon</td>
                <td>7:00 AM</td>
            </tr>
            
            <tr>
                <td>Olympic Triathlon</td>
                <td>7:30 AM</td>
            </tr>
            
            <tr>
                <td>10K</td>
                <td>7:15 AM</td>
            </tr>
            
            <tr>
                <td>Half Marathon</td>
                <td>7:15 AM</td>
            </tr>
        </table>
    
        <h4>Sunday</h4>
        <table>
            <tr>
                <th>Activity</th>
                <th>Time</th>
            </tr>
            
            <tr>
                <td>Sprint Triathlon</td>
                <td>8:00 AM</td>
            </tr>
            
            <tr>
                <td>Try-a-Tri</td>
                <td>8:20 AM</td>
            </tr>
            
            <tr>
                <td>Splash N' Dash</td>
                <td>12:00 PM</td>
            </tr>        
        </table>
    
        <h3>Packet Pick-up:</h3>
    
        <p>
            All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
        </p>
</section>

<! -- Registration Form -->

<section id="registrationForm" class="form">
    <h3 id="regFormHeader">REGISTER</h3>
    
    <form id="registrationForm" action="includes/sections/registration_form_process.php" method="POST">
        <p>Full Name:<br>
                <input type="text" name="fullName" placeholder="John Smith / Jane Smith">
        </p>
            
        <p>Age:<br>
            <input type="number" name="age" placeholder="30">
        </p>
            
        <p>Email:<br>
            <input type="text" name="emailAddress" placeholder="johnsmith@somewhere.com">
        </p>
            
        <p>Phone Number:<br>
            <input type="text" name="phoneNumber" placeholder="(503)-123-1234...">
        </p>
        
        <p>Emergency Contact Info:<br>
            <p>Full Name:<br>
                <input type="text" name="emergencyContact" placeholder="Their full name..."><br>
            </p>
            <p>Phone Number:<br>
                <input type="text" name="emergencyContactNumber" placeholder="(503)-123-1234...">
            </p>
        
        <p>Which event(s) would you like to attend? (select one activity and one role per day)</p>
        <p>Saturday:<br>
            <select name="satEvent">
                <option>Select One...</option>
                <option value="longCourseTri">Long Course Triathlon</option>
                <option value="olympicTri">Olympic Triathlon</option>
                <option value="10k">10K</option>
                <option value="halfMarathon">Half Marathon</option>
                <option value="n/a">N/A</option>
            </select>
        </p>

        <p>Athlete or volunteer?<br>
            <select name="satRole">
                <option>Select One...</option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
            </select>
        </p>
        
        <p>Sunday:<br>
            <select name="sunEvent">
                <option>Select One...</option>
                <option value="sprintMarathon">Sprint Marathon</option>
                <option value="tryATri">Try-a-Tri</option>
                <option value="splashNDash">Splash N' Dash</option>
                <option value="n/a">N/A</option>
            </select>
        </p>

        <p>Athlete or volunteer?<br>
            <select name="sunRole">
                <option value="select">Select One...</option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
            </select>
        </p>
            
        <p>Gender Identification:<br>
            <select name="gender">
                <option value="select">Select One...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="nonBinary">Non-binary</option>
            </select>
        </p>
        
        <p>Please specify any special accommodations you may need:<br>
            <textarea name="accommodations" placeholder="List or describe..." rows="5" cols="40"></textarea>
            <br>
            <input type="submit" value="Submit">
        </p>
    </form>
</section>