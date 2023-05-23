<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--     <?php
    phpinfo();
    ?> -->

    <table style="width: 1000px; margin-top: 50px;">
        <tr>
            <td><b>Heading</b></td>
            <td><b>tripDate</b></td>
            <td><b>Duration</b></td>
            <td><b>Summary</b></td>
        </tr>
        <?php

        try {
            error_log("Connecting to DB\n", 0);
            $dbhost = 'localhost';
            $dbname = 'halifax2';
            $dbuser = 'root';
            $dbpass = '';
            $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

            $query = "SELECT heading, tripDate, duration, summary FROM adventures";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $stmt->bindColumn('heading', $heading);
            $stmt->bindColumn('tripDate', $tripDate);
            $stmt->bindColumn('duration', $duration);
            $stmt->bindColumn('summary', $summary);
            while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
                echo "<tr>";
                echo "<td>" . $heading . "</td>";
                echo "<td>" . $tripDate . "</td>";
                echo "<td>" . $duration . "</td>";
                echo "<td>" . $summary . "</td>";
                echo "</tr>";
            }

        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage() . "<br/>";
            error_log("Cannot connect to DB\n", 0);
            die();
        }

        ?>
    </table>
</body>

</html>