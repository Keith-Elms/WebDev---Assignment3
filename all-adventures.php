<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //page header
?>
<!-- <div style="margin-top: 30px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px;"> -->
<!-- <div style="margin-top: 30px; padding-bottom: 20px; padding-left: 20px;"> -->

<!--The body text and links-->
<div class="non_header_content">
    <!-- <div> -->

    <img id="image_main" src="images/canoe.jpg" alt="A red canoe at the shore of a lake" />
    <div style="padding-left: 20px;">
        <div>
            <h1>Upcoming Adventures</h1></b>
            <hr>
        </div>

        <?php
        try {
            include("database-connect.php"); //include database connect code
        
            $query = "SELECT heading, tripDate, duration, summary FROM adventures ORDER BY tripDate";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $stmt->bindColumn('heading', $heading);
            $stmt->bindColumn('tripDate', $tripDate);
            $stmt->bindColumn('duration', $duration);
            $stmt->bindColumn('summary', $summary);
            while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
                ?>
                <h2><a href="">
                        <?= $heading ?>
                    </a></h2><!--These links to trip details pages are not currently active-->
                <p>
                    Date:
                    <?= $tripDate ?><br>Duration:
                    <?= $duration ?> days
                </p>
                <h3>Summary</h3>
                <p>
                    <?= $summary ?>
                </p>
                <?php
            }

        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage() . "<br/>";
            error_log("Cannot connect to DB\n", 0);
            die();
        }

        ?>
    </div>
</div>
<!-- <div>
    <h1>Admin - Confirm</h1></b>
    <hr style="margin: 20px 0; border-left: 0px;" />
    <h2>Data has been successfully added to DB</h2></b>
    <img id="image_support" src="images/Computer Problems - Free Stock Image.jfif"
        alt="a female office worker frustrated by computer issues" />
    <a href="all-adventures.php">View All Adventures</a>
</div> -->
<?php
include("footer.php"); //page footer
?>
</body>
<!--Link to the JQuery library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Link the javascript file-->
<script src="script.js"></script>

</html>