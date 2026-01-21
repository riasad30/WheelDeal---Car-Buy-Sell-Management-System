<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Register Form</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script src="js/script.js"></script>  
<div class="form-container">

   <form action="../controller/registerController.php" method="post">
      <h3>register now</h3>

      <?php
      if(isset($_SESSION['register_error'])){
         foreach($_SESSION['register_error'] as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
         unset($_SESSION['register_error']); 
      }
      ?>

      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
         <option value="staff">staff</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">Login now</a></p>
   </form>

</div>

</body>
</html>
