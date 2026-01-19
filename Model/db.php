<?php
$host = 'localhost';
$db   = 'car_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database Connection Error: " . mysqli_connect_error());
}

mysqli_set_charset($conn, $charset);
?>
