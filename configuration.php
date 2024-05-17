<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "second_hand_cars";
$connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
if ($connection === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}
else{
}
