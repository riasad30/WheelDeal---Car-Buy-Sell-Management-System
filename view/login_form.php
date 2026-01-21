<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login Form</title>

   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="form-container">

   <form action="../controller/authController.php" method="post">
      <h3>
         <img src="images/logo.png" alt="Logo" style="height:120px; width:auto; vertical-align:middle; margin-right:8px;"><br>
         Login now
      </h3>

      <?php
      if(isset($_SESSION['login_error'])){
         foreach($_SESSION['login_error'] as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
         unset($_SESSION['login_error']);
      }
      ?>

      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
   </form>

</div>

</body>
</html>
