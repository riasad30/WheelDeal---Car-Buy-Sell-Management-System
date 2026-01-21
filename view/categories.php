<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Categories</title>
    <link rel="stylesheet" href="css/style_user.css">
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

    <section class="car-search text-center">
        <br>
        <br>
        <br>
        
    </section>

   
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Categories</h2>
            <a href="category_bmw.php">
                <div class="box-3">
                    <img src="images/bmw.png" alt="bmw-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Bmw</h3>
                </div>
            </a>
            <a href="category_audi.php">
                <div class="box-3">
                    <img src="images/audi.png" alt="audi-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Audi</h3>
                </div>
            </a>
            <a href="#">
                <div class="box-3">
                    <img src="images/toyota.png" alt="toyota-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Toyota</h3>
                </div>
            </a>
            <a href="#">
                <div class="box-3">
                    <img src="images/nissan.png" alt="nissan-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Nissan</h3>
                </div>
            </a>
            <a href="#">
                <div class="box-3">
                    <img src="images/honda.png" alt="honda-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Honda</h3>
                </div>
            </a>
           
            <a href="#">
                <div class="box-3 ">
                    <img src="images/mazda.png" alt="mazda" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Mazda</h3>
                </div>
                
                <div class="clearfix"></div>
        </div>
        </a>
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
        include("footer/footer.php")
     ?>