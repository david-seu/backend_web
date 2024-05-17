<?php
require_once "configuration.php";
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: *");
$id = $_POST['id'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$mileage = $_POST['mileage'];
$price = $_POST['price'];
$condition = $_POST['condition'];
$transmission = $_POST['transmission'];
$fuel_type = $_POST['fuel_type'];
$engine_size = $_POST['engine_size'];
$fuel_efficiency = $_POST['fuel_efficiency'];
$color = $_POST['color'];

$sql_query = "update `car` set brand = '$brand', model = '$model', year = '$year', mileage = '$mileage', price = '$price', `condition` = '$condition', transmission = '$transmission', fuel_type = '$fuel_type', engine_size = '$engine_size', fuel_efficiency = '$fuel_efficiency', color = '$color' where car_id = $id;";
global $connection;
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "Your car was updated successfully!";
    header("Location: showCars.php");
} else {
    echo "Oops!Something went wrong and your document cannot be added!Please try again later.";
}
mysqli_close($connection);