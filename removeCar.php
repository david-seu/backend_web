<?php
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: *");
require_once "configuration.php";
global $connection;
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id = $request->id;
$sql_query = "delete from car where id = '$id';";
$result = mysqli_query($connection, $sql_query);
echo "Your car was deleted successfully!";
mysqli_close($connection);
