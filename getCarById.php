<?php
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: *");
require_once "configuration.php";
global $connection;
$id = $_GET['id'];
$sql_query = "select * from car where car_id = '$id';";
$result = mysqli_query($connection, $sql_query);
$car = mysqli_fetch_array($result);
echo json_encode(array(
    "id" => $car['car_id'],
    "brand" => $car['brand'],
    "model" => $car['model'],
    "year" => $car['year'],
    "mileage" => $car['mileage'],
    "price" => $car['price'],
    "condition" => $car['condition'],
    "transmission" => $car['transmission'],
    "fuel_type" => $car['fuel_type'],
    "engine_size" => $car['engine_size'],
    "fuel_efficiency" => $car['fuel_efficiency'],
    "color" => $car['color'],
));
mysqli_close($connection);