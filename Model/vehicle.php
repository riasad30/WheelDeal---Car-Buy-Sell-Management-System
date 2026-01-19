<?php
session_start();
require 'db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Dealer') {
    die("Access Denied. Dealers only.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $make  = trim($_POST['make']);
    $model = trim($_POST['model']);
    $price = trim($_POST['price']);
    $dealer_id = $_SESSION['user_id'];

    if (!empty($make) && !empty($model) && !empty($price)) {

        $sql = "INSERT INTO vehicles 
                (dealer_id, make, model, price, status) 
                VALUES (?, ?, ?, ?, 'Available')";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$dealer_id, $make, $model, $price]);

        $success = "Vehicle added successfully!";
    } else {
        $error = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Add New Vehicle</h1>
    <nav>
        <a href="dashboard.php">Back to Dashboard</a>
    </nav>
</header>

<div class="container">

    <?php
        if (isset($success)) {
            echo "<p style='color:green;'>$success</p>";
        }
        if (isset($error)) {
            echo "<p style='color:red;'>$error</p>";
        }
    ?>

    <form method="POST" action="">
        <div class="form-group">
            <label>Make (Brand):</label>
            <input type="text" name="make" placeholder="e.g. Toyota" required>
        </div>

        <div class="form-group">
            <label>Model:</label>
            <input type="text" name="model" placeholder="e.g. Camry" required>
        </div>

        <div class="form-group">
            <label>Price ($):</label>
            <input type="number" name="price" required>
        </div>

        <button type="submit">List Vehicle</button>
    </form>

</div>

</body>
</html>
