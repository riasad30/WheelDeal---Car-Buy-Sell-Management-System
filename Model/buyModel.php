<?php
@include 'config.php';

function insertbuyInfo($conn, $fullname, $contact, $email, $address) {
    $insert = "INSERT INTO tbl_buy_info (full_name, phone, email, address) 
               VALUES ('$fullname', '$contact', '$email', '$address')";
    return mysqli_query($conn, $insert);
}
?>
