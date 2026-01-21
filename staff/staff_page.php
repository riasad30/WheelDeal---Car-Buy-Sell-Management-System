<?php
@include '../../model/config.php';
session_start();


if (!isset($_SESSION['staff_name'])) {
    header('location:../login_form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Staff Dashboard</title>
   <link rel="stylesheet" href="../css/style_user.css">
</head>
<body>


<section class="navbar">
  <div class="container">
    <div class="logo">
      <a href="staff_page.php"><img src="../images/logo.png" alt="Logo" class="img-responsive" /></a>
    </div>
    <div class="menu text-left">
      <ul>
          <li><a href="staff_page.php">Dashboard</a></li>
          <li><a href="manage_car.php">Manage Car</a></li>
          <li><a href="see_car.php">See Car</a></li>
          <li><a href="see_buy_list.php">See Buy List</a></li>
          <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</section>


<section class="car-search text-center">
  <div class="container">
   
  </div>
</section>


<section class="social">
  <div class="container text-center">
    <ul type="none">
      <li><a href="#"><img src="../images/facebook.png" alt="facebook" class="social-img img-responsive"></a></li>
      <li><a href="#"><img src="../images/instagram.png" alt="instagram" class="social-img img-responsive"></a></li>
      <li><a href="#"><img src="../images/twitter.png" alt="twitter" class="social-img img-responsive"></a></li>
    </ul>
  </div>
</section>



</body>
</html>
