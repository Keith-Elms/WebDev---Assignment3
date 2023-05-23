<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //include the file with the page header
?>
<div style="background-color: lightgray; padding-bottom: 20px; padding-left: 20px;">
    <div class="contains_hyperlinks">
        <div class="logout_bar">
            <a href="logout.php">Log out</a>
        </div>
        <div>
            <h1>Welcome To Your IT Support System</h1>
            <hr>
            <div class="it_support_login">
                <form action="problem.php" method="get">
                    <!--select dropdowns, text fields and submit for user login-->
                    <table id="admin_person_table" cellpadding="0">
                        <tbody>
                            <tr>
                                <td><select name="title" id="title">
                                        <option value="mr">Mr.</option>
                                        <option value="ms">Ms.</option>
                                        <option value="mrs">Mrs.</option>
                                        <option value="other">Other</option>
                                    </select></td>
                                <td><INPUT type="text" name="firstname" placeholder="first name"></td>
                                <td><INPUT type="text" name="lastname" placeholder="last name"></td>
                                <td><select name="role" id="role">
                                        <option value="admin">Admin</option>
                                        <option value="manager">Manager</option>
                                        <option value="ceo">CEO</option>
                                    </select></td>
                                <td><INPUT type="submit" name="submit" value="Submit"></td>
                            </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php"); //include the file with the page footer
?>
</body>
<!--Link to the JQuery library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Link the javascript file-->
<script src="script.js"></script>

</html>