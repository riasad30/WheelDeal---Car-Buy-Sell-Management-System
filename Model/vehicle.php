<?php
require_once 'db.php';

function getAllAvailableVehicles() {
    global $conn; 
    $sql = "SELECT * FROM vehicles WHERE status = 'Available'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function addVehicle($dealer_id, $make, $model, $price) {
    global $conn;
    
    $dealer_id = mysqli_real_escape_string($conn, $dealer_id);
    $make = mysqli_real_escape_string($conn, $make);
    $model = mysqli_real_escape_string($conn, $model);
    $price = mysqli_real_escape_string($conn, $price);

    $sql = "INSERT INTO vehicles (dealer_id, make, model, price, status) 
            VALUES ('$dealer_id', '$make', '$model', '$price', 'Available')";

    return mysqli_query($conn, $sql);
}
?>
