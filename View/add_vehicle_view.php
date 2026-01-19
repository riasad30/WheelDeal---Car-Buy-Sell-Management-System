<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Add Vehicle</h1>
        <nav><a href="DashboardController.php">Back</a></nav>
    </header>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $host = "localhost";
            $user = "root";
            $password = "";
            $dbname = "car_marketplace";

            $conn = mysqli_connect($host, $user, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $dealer_id = $_SESSION['user_id'];
            $make = mysqli_real_escape_string($conn, $_POST['make']);
            $model = mysqli_real_escape_string($conn, $_POST['model']);
            $price = mysqli_real_escape_string($conn, $_POST['price']);

            $sql = "INSERT INTO vehicles (dealer_id, make, model, price) VALUES ('$dealer_id', '$make', '$model', '$price')";

            if (mysqli_query($conn, $sql)) {
                echo "<p>Vehicle added successfully!</p>";
            } else {
                echo "<p>Error adding vehicle: " . mysqli_error($conn) . "</p>";
            }

            mysqli_close($conn);
        }
        ?>

        <form method="POST">
            <input type="text" name="make" placeholder="Make (e.g. Toyota)" required>
            <input type="text" name="model" placeholder="Model (e.g. Camry)" required>
            <input type="number" name="price" placeholder="Price" required>
            <button type="submit">List Car</button>
        </form>
    </div>
</body>
</html>
