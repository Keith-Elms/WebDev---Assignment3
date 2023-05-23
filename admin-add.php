<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //include the file with the page header
?>
<div
    style="background-color: lightgray; margin-top: 30px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px;">
    <!--<div class="logout_bar">
        <a href="logout.php">Log out</a>
    </div> -->
    <!--The body text and links-->
    <div class="non_header_content">
        <h1>Admin - Add Adventure</h1>
        <hr>
        <h2>Enter the trip details:</h2>
        <div>
            <form action="admin-confirm.php" method="get">
                <!--select dropdowns, text fields and submit for user login-->
                <table class="trip_entry_table" cellpadding="0">
                    <tbody>
                        <tr>
                            <th>Heading</th>
                            <td><INPUT type="text" name="heading" placeholder="trip name"></td>
                        </tr>
                        <tr>
                            <th>Trip Date</th>
                            <td><INPUT type="date" name="tripDate" placeholder=""></td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td><INPUT type="text" name="duration" placeholder="no. of days"></td>
                        </tr>
                        <tr>
                            <th>Summary</th>
                            <td><textarea class="trip_desc_box" name="summary" placeholder="Enter the trip description..."></textarea></td>
                        </tr>
                        <tr>
                            <td><INPUT type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
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