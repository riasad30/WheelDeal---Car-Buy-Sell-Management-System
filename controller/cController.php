<?php
session_start();
@include '../model/config.php';
@include '../model/cModel.php';

if (isset($_POST['submit'])) {
    $fullname    = mysqli_real_escape_string($conn, $_POST['full-name']);
    $contact     = mysqli_real_escape_string($conn, $_POST['contact']);
    $email       = mysqli_real_escape_string($conn, $_POST['email']);
    $car_type    = mysqli_real_escape_string($conn, $_POST['car-type']);
    $car_details = mysqli_real_escape_string($conn, $_POST['address']); 

    
    $result = insertBuyRequest($conn, $fullname, $contact, $email, $car_type, $car_details);

    if ($result) {
        $_SESSION['success'] = "Your request has been submitted! Owner will contact you soon.";
        header("location: ../view/community.php");
        exit;
    } else {
        $_SESSION['error'] = "Failed to submit your request. Please try again.";
        header("location: ../view/community.php");
        exit;
    }
}
?>
