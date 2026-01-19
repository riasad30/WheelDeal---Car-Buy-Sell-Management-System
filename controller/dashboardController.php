<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: LoginController.php");
    exit;
}

$role = $_SESSION['role'];
$username = $_SESSION['username'];

include '../View/dashboard_view.php';
?>
