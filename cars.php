<?php
if (isset($_GET['submit'])) {
    $search = strtolower(trim($_GET['search']));

    if ($search === "bmw") {
        header("Location:category_bmw.php");
        exit();
    } 
    elseif ($search === "audi") {
        header("Location:category_audi.php");
        exit();
    } 
     else {
        header("Location:categories.php");
        exit();
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Cars</title>
    <link rel="stylesheet" href="css/style_user.css" />
    <link rel="icon" href="images/favicon.png" />
</head>

<body>
    
    <section class="navbar">
        <div class="container">
            <div class="logo">
                
                <a href="client/user_page.php"><img src="images/logo.png" alt=" Cars Management Logo"
                        class="img-responsive" /></a>
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

    <section class="car-search text-center">
        <div class="container">
        <form action="cars.php" method="get">
            <input type="search" name="search" placeholder="Search for car..."/>
            <input type="submit" name="submit" value="search" class="btn btn-primary"/>
        </form>

        </div>
    </section>

    <section class="car-menu">
        <div class="container">
            <h2 class="text-center">Explore Cars</h2>

            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-bmw-1.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>

            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-audi-1.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-toyota-1.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-bmw-1.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">

                    <img src="images/menu-bmw-2.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">Condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>
                    
                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-bmw-3.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>
                    
                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-toyota-2.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-audi-2.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-bmw-4.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>

                </div>
            </div>
            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-audi-3.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>
                    
                </div>
            </div>

            <div class="car-menu-box">
                <div class="car-menu-img">
                    <img src="images/menu-bmw-6.png" alt="" class="img-curve img-responsive">
                </div>
                <div class="car-menu-desc">
                    <h4>Car Title</h4>
                    <p class="car-status">Location</p>
                    <p class="car-desc">condition is perfect</p>
                    <br>
                    <a href="buy.php" class="btn btn-primary">Buy</a>
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    
    <div class="mp-21"></div>
   
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
        include("footer/footer.php")
     ?>