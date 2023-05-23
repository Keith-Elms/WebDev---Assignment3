<?php
session_start(); //start session on each PHP page load to start the session initially or resume the session current session
?>
<!DOCTYPE html>
<html lang="en">

<!-- <?php
// session_start(); //start session on each PHP page load to start the session initially or resume the session current session
?> -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <title>Halifax Canoe and Kayak</title>
</head>

<body>
    <header class="header_bar">
        <!--Hamburger Menu Button-->
        <img id="nav_toggle_button" class="header_button" src="images/hamburger.png" alt="hamburger button" />

        <h1 id="header_text">Halifax Canoe and Kayak</h1>

        <img id="image_logo" src="images/paddle-white.png" alt="a logo showing two crossed canoe paddles" />

        <!--navigation menu-->
        <nav class="header_nav">
            <ul class="header_nav_menu">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="trip.html">Trip</a></li> -->
                <li><a href="index2.php">Admin Login</a></li>
                <li><a href="admin-add.php">Add Adventure</a></li>
            </ul>
        </nav>>
    </header>
</body>

</html>