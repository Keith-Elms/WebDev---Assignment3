<style>
        <?php
        include("styles.css"); //include the style.css file
        ?>
</style>
<?php
include("header.php");
?>

<?php
//populate session variables
$_SESSION["title"] = $_GET["title"];
$_SESSION["fname"] = $_GET["firstname"];
$_SESSION["lname"] = $_GET["lastname"];
$_SESSION["role"] = $_GET["role"];

$role = $_SESSION["role"];
?>

<div style="background-color: lightgray; padding-left: 20px; padding-bottom: 20px;">
        <div class="contains_hyperlinks">
                <div class="logout_bar">
                        <a href="logout.php">Log out</a>
                </div>

                <?php
                //determine the person's role and send the correct 'page content' response
                switch ($role) {
                        case "admin":
                                ?>
                                <h1>IT Support System</h1>
                                <hr>
                                <h2>Here are your options:</h2>
                                <!-- <div class="links"> -->
                                <div>
                                        <a href="isnt-working.php">My computer is not working</a></br></br>
                                        <a href="new-account.php">Create New Account</a>
                                </div>
                                <?php
                                break;
                        case "manager";
                                ?>
                                <h1>Hello Manager</h1>
                                <h2>Here are your options:</h2>
                                <a href="isnt-working.php">My computer is not working</a></br></br>
                                <a href="lost-password.php">Lost Password</a>
                                <?php
                                break;
                        case "ceo";
                                ?>
                                <h1>Hello CEO</h1>
                                <h2>Here are your options:</h2>
                                <a href="isnt-working.php">My computer is not working</a></br></br>
                                <a href="need-help.php">Need Assistance</a>
                                <?php
                                break;
                }
                ?>
        </div>
</div>

<?php
include("footer.php");
?>
</body>
<!--Link to the JQuery library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Link the javascript file-->
<script src="script.js"></script>

</html>