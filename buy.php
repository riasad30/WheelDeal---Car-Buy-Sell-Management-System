<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Form</title>
    <link rel="stylesheet" href="css/style_user.css" />
    <link rel="icon" href="images/favicon.png" />
</head>

<body>
   
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="client/user_page.php"><img src="images/logo.png" alt="Car Management Logo" class="img-responsive" /></a>
            </div>
            <div class="menu text-right">
                <ul>
                     <li><a href="client/user_page.php">Home</a></li>
                     <li><a href="categories.php">Categories</a></li>
                     <li><a href="cars.php">Cars</a></li>
                     <li><a href="community.php">Community</a></li>
                     <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <div>
        <h2 class="text-center text-orange">Fill This Form  Process.</h2>
    </div>

    <section class="car-search">
        <div class="container">

            <?php
            if (isset($_SESSION['success'])) {
                echo "<p style='color:green; text-align:center;'>".$_SESSION['success']."</p>";
                unset($_SESSION['success']);
            }
            if (isset($_SESSION['error'])) {
                echo "<p style='color:red; text-align:center;'>".$_SESSION['error']."</p>";
                unset($_SESSION['error']);
            }
            ?>

            <form action="../controller/cController.php" method="post" class="buy">
                <fieldset>
                    <legend class="text-center text-orange">Details Info</legend>

                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +88017XXXXXXX" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. example@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="2" placeholder="E.g. Flat No, House No, House, Area, City"
                        class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-center">
                </fieldset>
            </form>

        </div>
    </section>

    <section class="social">
        <div class="container text-center">
            <ul type="none">
                <li>
                    <a href="#"><img src="images/facebook.png" alt="facebook" class="social-img img-responsive"></a>
                </li>
                <li>
                    <a href="#"><img src="images/instagram.png" alt="instagram" class="social-img img-responsive"></a>
                </li>
                <li>
                    <a href="#"><img src="images/twitter.png" alt="twitter" class="social-img img-responsive"></a>
                </li>
            </ul>
        </div>
    </section>

</body>

</html>

<?php
include("footer/footer.php");
?>
