<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: LoginController.php");
    exit;
}

$role = $_SESSION['role'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../View/style.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <nav>
            <a href="../Controller/HomeController.php">Browse Cars</a>
            <?php if($role == 'Dealer') { ?>
                <a href="../Controller/AddVehicleController.php">Add Car</a>
            <?php } ?>
            <?php if($role == 'Buyer') { ?>
                <a href="../Controller/WishlistController.php">My Wishlist</a>
            <?php } ?>
            <a href="../Controller/LogoutController.php" style="color:red;">Logout</a>
        </nav>
    </header>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>
        <p>You are logged in as a <strong><?php echo $role; ?></strong>.</p>
    </div>
</body>
</html>
