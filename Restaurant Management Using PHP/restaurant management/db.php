<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$database = "restaurant";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
