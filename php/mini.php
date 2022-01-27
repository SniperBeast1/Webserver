<?php


$name = "localhost";
$password = "root";
$dbname = "miniprojekt";
$conn = new mysqli($name, $password, $dbname);

$name = $_POST["name"];
$password = $_POST["email"];

$sql = "INSERT INTO inlogningar (name, password, time) VALUES ('$name', '$password', now())";
$conn->query($sql);
                
?>