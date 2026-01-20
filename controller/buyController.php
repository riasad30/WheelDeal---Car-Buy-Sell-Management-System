<?php
session_start();
@include '../model/config.php';
@include '../model/buyModel.php';

if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['full-name']);
    $contact  = mysqli_real_escape_string($conn, $_POST['contact']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $address  = mysqli_real_escape_string($conn, $_POST['address']);

    
    $result = insertBuyInfo($conn, $fullname, $contact, $email, $address);

    if ($result) {
        $_SESSION['success'] = "Buy request submitted successfully!";
        header("location: ../view/buy.php");
        exit;
    } else {
        $_SESSION['error'] = "Failed to submit Buy request.";
        header("location: ../view/buy.php");
        exit;
    }
}
?>
