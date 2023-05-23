<?php
error_log("Connecting to DB\n", 0);
$dbhost = 'localhost';
$dbname = 'halifax2';
$dbuser = 'root';
$dbpass = '';
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
?>