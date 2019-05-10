<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="UTF-8">
    <meta name="author" content="Kelli Pando">
    <meta name="description" content="Register for Ace in the Hole Multisport Events">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ace in the Hole Multisport Events, Portland, Oregon">
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
 
    <link href="https://fonts.googleapis.com/css?family=Play:700|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/grid.css">
    
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    
    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        jQuery(function($){
    	     $( '.menu-btn' ).click(function(){
    	     $('.responsive-menu').toggleClass('expand')
    	     })
        })
    </script

</head>

<body>
    <?php    
        include 'includes/header.php'
    ?>
    
    <main class="section group">
        
        <section id="slideshow" class=".span_12_of_12">
            <!-- Image Slideshow ... Note: Only seen on tablet and desktop versions -->
            <p class="imageFont">Slideshow for tablet/desktop versions</p>
        </section>
        
        <section id="aboutAce" class=".span_12_of_12">
            <!-- About Ace in the Hole Multisport Events, including an image -->
            <h2>About Ace in the Hole Multisport Events</h2>

        <!-- single image contained inside about section, on mobile versions only -->
            <div id="aboutImage">
                    <p class="imageFont">Image goes here</p>
            </div>

            <p>
                Sample text.
            </p>
            
        </section>
        
        <section id="registration" class=".span_12_of_12">
            <!-- Registration Info and Form -->
            <h2>Registration</h2>
            <p>
                Sample text.
            </p>
        </section>
        
        <section id="courseDetails" class=".span_12_of_12">
            <!-- Course Details -->
            <h2>Course Details</h2>
            
            <p>
                Sample text.
            </p>
        </section>
        
        <section id="aboutEvent" class=".span_12_of_12">
            <!-- About the Event -->
            <h2>About the Event</h2>
            <p>
                Sample text.
            </p>
        </section>
        
        <section id="faqs" class=".span_12_of_12">
            <!-- FAQS -->
            <h2>FAQS</h2>
            <p>
                Sample text.
            </p>
            
        </section>
        
        <section id="contact" class=".span_12_of_12">
            <!-- Contact Form -->
            <h2>Contact Form</h2>
            <p>
                Sample text.
            </p>
        </section>
    </main>
 
    <!-- Footer section -->
    <?php
            include 'includes/footer.php'
    ?>
    
</body>

</html>