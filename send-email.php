<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //page header
?>

<?php
$_SESSION["email"] = $_GET["email"];
$email = $_SESSION["email"];
$role = $_SESSION["role"];
?>

<div style="background-color: lightgray; padding-bottom: 20px; padding-left: 20px;">
    <div class="logout_bar">
        <a href="logout.php">Log out</a>
    </div>
    <div>
        <?php
        //determine the person's role and send the correct 'page content' response
        switch ($role) {
            case "admin":
                echo "<h2>" . "An email has been sent to Tech Support requesting a new account for email address: " . $email . "</h2>";
                break;
            case "manager";
                echo "<h2>" . "An email has been sent to Tech Support requesting a new password for email address: " . $email . "</h2>";
                break;
        }
        ?>
        <img id="image_support" src="images/Happy PC User - Free Stock Image.jfif"
            alt="a female computer user with raised in success" />
    </div>
</div>

<?php
include("footer.php"); //page footer
?>
</body>
<!--Link to the JQuery library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Link the javascript file-->
<script src="script.js"></script>

</html>