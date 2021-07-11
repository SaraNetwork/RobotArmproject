<?php

try {
    $servername="localhost";
$username = "root";
$password = "";
$DB = "smartmethods";

$conn = new mysqli($servername, $username, $password);

$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];

$S = "INSERT INTO `motors`(`motor1`, `motor2`, `motor3`, `motor4`, `motor5`) values ('$m1','$m2','$m3','$m4','$m5');";
$query = "INSERT INTO `motors`(`motor1`, `motor2`, `motor3`, `motor4`, `motor5`) VALUES ('1','3','5','7','9');";
$conn->query($query);
// header("Loca");
} catch (\Throwable $th) {
    echo "Error";
}
?>