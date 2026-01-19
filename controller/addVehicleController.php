<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Dealer') {
    die("Access Denied");
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "car_marketplace";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $make = mysqli_real_escape_string($conn, $_POST['make']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $dealer_id = $_SESSION['user_id'];

    $sql = "INSERT INTO vehicles (dealer_id, make, model, price) VALUES ('$dealer_id', '$make', '$model', '$price')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Vehicle added successfully!";
    } else {
        $msg = "Error adding vehicle: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

include '../View/add_vehicle_view.php';
?>
