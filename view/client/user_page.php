<?php

@include '../../model/config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login_form.php');
}

if (isset($_GET['search'])) {
    $search = strtolower(trim($_GET['search']));

    if ($search == 'bmw') {
        header("Location: ../category-bmw.php");
        exit();
    } 
    elseif ($search == 'audi') {
        header("Location: ../category-audi.php");
        exit();
    } 
    else {
        header("Location: ../categories.php");
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
  <title>Car Buy sell & Community</title>
  <link rel="stylesheet" href="../css/style_user.css"/>
  <link rel="icon" href="../images/favicon.png" />
</head>

<body>

<section class="navbar">
  <div class="container">
    <div class="logo">
      <a href="user_page.php">
        <img src="../images/logo.png" alt="Car Buy sell & Community Logo" class="img-responsive" />
      </a>
    </div>

    <div class="menu text-right">
      <ul type="none">
        <li><a href="user_page.php">Home</a></li>
        <li><a href="../categories.php">Categories</a></li>
        <li><a href="../cars.php">Cars</a></li>
        <li><a href="../car-community.php">Car Community</a></li>
        <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div>

    <div class="clearfix"></div>
  </div>
</section>

<section class="car-search text-center">
  <div class="container">
    <form action="user_page.php" method="GET">
      <input type="search" name="search" placeholder="Search for car..." />
      <input type="submit" value="search" class="btn btn-primary" />
    </form>
  </div>
</section>


<section class="categories">
  <div class="container">
    <h2 class="text-center">Categories</h2>

    <a href="../category-bmw.php">
      <div class="box-3">
        <img src="../images/bmw.png" alt="bmw" class="img-responsive img-curve img-bg categories-img" />
        <h3 class="text-center text-orange">BMW</h3>
      </div>
    </a>

    <a href="../category-audi.php">
      <div class="box-3">
        <img src="../images/audi.png" alt="Audi" class="img-responsive img-curve img-bg categories-img" />
        <h3 class="text-center text-orange">Audi</h3>
      </div>
    </a>

    <a href="#">
      <div class="box-3">
        <img src="../images/toyota.png" alt="toyota" class="img-responsive img-curve img-bg categories-img" />
        <h3 class="text-center text-orange">Toyota</h3>
      </div>
    </a>

    <div class="clearfix"></div>
  </div>
</section>

<section class="car-menu">
  <div class="container">
    <h2 class="text-center">Explore Cars</h2>

    <div class="car-menu-box">
      <div class="car-menu-img">
        <img src="../images/menu-bmw-1.png" class="img-curve img-responsive">
      </div>
      <div class="car-menu-desc">
        <h4>Car Title</h4>
        <p class="car-status">Location</p>
        <p class="car-desc">Condition is perfect</p>
        <br>
        <a href="../buy.php" class="btn btn-primary">Buy</a>
      </div>
    </div>

    <div class="car-menu-box">
      <div class="car-menu-img">
        <img src="../images/menu-bmw-2.png" class="img-curve img-responsive">
      </div>
      <div class="car-menu-desc">
        <h4>Car Title</h4>
        <p class="car-status">Location</p>
        <p class="car-desc">Condition is perfect</p>
        <br>
        <a href="../buy.php" class="btn btn-primary">Buy</a>
      </div>
    </div>

    <div class="car-menu-box">
      <div class="car-menu-img">
        <img src="../images/menu-bmw-3.png" class="img-curve img-responsive">
      </div>
      <div class="car-menu-desc">
        <h4>Car Title</h4>
        <p class="car-status">Location</p>
        <p class="car-desc">Condition is perfect</p>
        <br>
        <a href="../buy.php" class="btn btn-primary">Buy</a>
      </div>
    </div>

    <div class="car-menu-box">
      <div class="car-menu-img">
        <img src="../images/menu-audi-1.png" class="img-curve img-responsive">
      </div>
      <div class="car-menu-desc">
        <h4>Car Title</h4>
        <p class="car-status">Location</p>
        <p class="car-desc">Condition is perfect</p>
        <br>
        <a href="../buy.php" class="btn btn-primary">Buy</a>
      </div>
    </div>

    <div class="clearfix"></div>
  </div>

  <p class="text-center mp-21">
    <a href="../cars.php">See All Cars</a>
  </p>
</section>

<section class="social">
  <div class="container text-center">
    <ul type="none">
      <li><a href="#"><img src="../images/facebook.png" class="social-img img-responsive"></a></li>
      <li><a href="#"><img src="../images/instagram.png" class="social-img img-responsive"></a></li>
      <li><a href="#"><img src="../images/twitter.png" class="social-img img-responsive"></a></li>
    </ul>
  </div>
</section>

</body>
</html>

<?php
include("../footer/footer.php");
?>
