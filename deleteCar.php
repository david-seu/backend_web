<?php
require_once "configuration.php";
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: *");
global $connection;
if (isset($_POST['id']) && !empty(trim($_POST['id']))) {
    $id = $_POST['id'];
    $sql_query = "delete from car where car_id = '$id';";
    $result = mysqli_query($connection, $sql_query);
    if ($result) {
        echo "Your car was deleted successfully!";
        header("Location: showCars.php");
    } else {
        echo "Oops! Something went wrong and your car cannot be deleted! Please try again later.";
    }
}
mysqli_close($connection);
