<?php
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: *");
require_once "configuration.php";
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

$sql_query = "insert into `car` (brand, model, year, mileage, price, `condition`, transmission, fuel_type, engine_size, fuel_efficiency, color) values ('$brand', '$model', '$year', $mileage, '$price', '$condition', '$transmission', '$fuel_type', '$engine_size', '$fuel_efficiency', '$color')";
global $connection;
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "Your car was added successfully!";
    echo $result;
    header("Location: showCars.php");
} else {
    echo "Oops!Something went wrong and your car cannot be added!Please try again later.";
    echo die(mysqli_error($connection));
}
mysqli_close($connection);