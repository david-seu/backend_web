<?php
require_once 'configuration.php';
header("Access-Control-Allow-Origin: *");
$sql_query = "select * from `car`";
global $connection;
$result = mysqli_query($connection, $sql_query);

if ($result) {
    $number_of_rows = mysqli_num_rows($result);
    $requested_cars = array();
    $brand = $_GET["brand"];
    for ($i = 0; $i < $number_of_rows; $i++) {
        $row = mysqli_fetch_array($result);
        if (str_contains(strtolower($row["brand"]), strtolower($brand)))
            array_push($requested_cars, array(
                "id" => $row['id'], 
                "brand" => $row['brand'],
                "model" => $row['model'],
                "year" => $row['year'],
                "mileage" => $row['mileage'],
                "price" => $row['price'],
                "condition" => $row['condition'],
                "transmission" => $row['transmission'],
                "fuel_type" => $row['fuel_type'],
                "engine_size" => $row['engine_size'],
                "fuel_efficiency" => $row['fuel_efficiency'],
                "color" => $row['color'],
            ));    
    }
    mysqli_free_result($result);
    echo json_encode($requested_cars);
}
mysqli_close($connection);