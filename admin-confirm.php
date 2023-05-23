<style>
    <?php
    include("styles.css"); //include the style.css file
    ?>
</style>
<?php
include("header.php"); //page header
?>

<?php
$_SESSION["heading"] = $_GET["heading"];
$_SESSION["tripDate"] = $_GET["tripDate"];
$_SESSION["duration"] = $_GET["duration"];
$_SESSION["summary"] = $_GET["summary"];

$heading = $_SESSION["heading"];
$tripDate = $_SESSION["tripDate"];
$duration = $_SESSION["duration"];
$summary = $_SESSION["summary"];

try {
    include("database-connect.php"); //include database connect code

/*Tried to implement a check to stop duplicate trip entries if this page is refreshed or returned back to from the next page.*/
/*Was unable to debug this new code so it was removed.*/
/*     $query = "SELECT heading, tripDate, duration, summary FROM adventures
    WHERE heading = $heading AND tripDate = $tripDate AND duration = $duration AND summary = $summary";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $stmt->bindColumn('heading', $heading);
    $stmt->bindColumn('tripDate', $tripDate);
    $stmt->bindColumn('duration', $duration);
    $stmt->bindColumn('summary', $summary);

    $count = $stmt->rowCount();
    echo $count; */

    // if ($count == 0) {
        $sql = "INSERT INTO `adventures` (`heading`, `tripDate`, `duration`, `summary`) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        $pdo->beginTransaction();
        $stmt->execute([$heading, $tripDate, $duration, $summary]);
        $pdo->commit();
    // }
    ?>
    <?php
} catch (Exception $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    error_log("Cannot connect to DB\n", 0);
    ?>
    <label class="title">Adventure Submission - Failed</label>
    <br>
    <label class="subtitle">Encountered technical errors. Please contact system administrator.</label>
    <br>
    <?php
}
// Empty the adventure details variables so that can't be inserted into the DB more than once if this page is refreshed or returned to.
//no code yet to do this?

?>

<div
    style="background-color: lightgray; margin-top: 30px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px;">
    <!--     <div class="logout_bar">
        <a href="logout.php">Log out</a>
    </div> -->
    <!--The body text and links-->
    <div class="non_header_content">
        <h1>Admin - Confirm</h1></b>
        <hr>
        <h2>The Trip has been successfully added to database</h2></b>
<!--         <img id="image_support" src="images/Happy PC User - Free Stock Image.jfif"
            alt="a female computer user with raised in success" /> -->
        <div>
            <h2><a href="all-adventures.php">View All Adventures</a></h2>
        </div>

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