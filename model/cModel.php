<?php
@include 'config.php';

function insertBuyRequest($conn, $fullname, $contact, $email, $car_type, $car_details) {
    $insert = "INSERT INTO tbl_car_community_info (full_name, phone, email, car_type, car_details) 
               VALUES ('$fullname', '$contact', '$email', '$car_type', '$car_details')";
    return mysqli_query($conn, $insert);
}
?>
