<?php

@include '../../model/config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   
   <link rel="stylesheet" href="../css/style_user.css">

</head>
<body>
  
  
  <section class="navbar">
    <div class="container">
      <div class="logo">
        <a href="admin_page.php"><img src="../images/logo.png" alt="Logo" class="img-responsive" /></a>
      </div>
      <div class="menu text-left">
        <ul type="dashboard">
            <li><a href="admin_page.php">Dashboard</a></li>
            <li><a href="categories_admin.php">Categories</a></li>
            <li><a href="Manage_user.php">Manage Users</a></li>
            <li><a href="manage_staff.php">Manage Staff</a></li>
             <li><a href="../logout.php">Logout</a></li>
         </ul>
      </div>
      
      <div class="clearfix"></div>
    </div>
  </section>

  <<h1 style="text-align: center; color: red;">Welcome Sir</h1>


  <section class="car-search text-center">
    <div class="container">
      <form action="admin_page.php" method="GET">
       
      </form>
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

  <?php include("../footer/footer_1.php"); ?>

  
</body>
</html>