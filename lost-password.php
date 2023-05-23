<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //page header
?>
<div style="background-color: lightgray; padding-bottom: 20px; padding-left: 20px;">
    <div class="contains_hyperlinks">
        <div class="logout_bar">
            <a href="logout.php">Log out</a>
        </div>
        <form action="send-email.php" method="get">
            <div>
                <h1>IT Support System</h1></b>
                <hr>
                <h2>To recover your password, enter your email address and click Submit.</h2></b>
                <table id="admin_email_table">
                    <tr>
                        <td><INPUT type="text" name="email" placeholder="email address"></td>
                        <td><INPUT type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </div>
        </form>
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