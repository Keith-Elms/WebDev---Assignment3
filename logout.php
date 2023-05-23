<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //page header
?>

<!-- <div
    style="background-color: lightgray; margin-top: 20px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px;"> -->
<div
    style="background-color: lightgray; margin-top: 30px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px;">
    <div class="contains_hyperlinks">
        <h1>IT Support System</h1></b>
        <hr>
        <h2>You have been logged out.</h2></b>
        <div>
            <a href="index2.php">Return to the IT Support Login Page</a></br></br>
            <a href="index.php">Home</a>
        </div>
    </div>
</div>
<?php
include("footer.php"); //page footer
?>

<?php
session_destroy(); //end the current session after logging out.
?>

</body>
<!--Link to the JQuery library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Link the javascript file-->
<script src="script.js"></script>

</html>