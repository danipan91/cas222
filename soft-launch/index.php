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
    <script type="text/javascript" src="js/hamburger.js"></script>
    <script type="text/javascript" src="js/navigation_scroll.js"></script>
    <script type="text/javascript" src="js/accordion.js"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>

</head>

<body>
    <?php    
        include 'includes/header.php';
            
        include 'includes/slideshow.php';
    ?>
                
    <main class="section group">
        
        <?php
            include 'includes/sections/about_ace.php';
 
            include 'includes/sections/registration.php';

            include 'includes/sections/course_details.php';
            
            include 'includes/sections/contact.php';

            include 'includes/sections/about_event.php';
    
            include 'includes/sections/social_media.php';
    
            include 'includes/sections/weather_feed.php';
     
            include 'includes/sections/faqs.php';
        ?>
    </main>
 
    <!-- Footer section -->
    <?php
            include 'includes/footer.php'
    ?>
    
</body>

</html>