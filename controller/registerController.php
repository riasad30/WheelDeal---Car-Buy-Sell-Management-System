<?php
@include '../model/config.php';
@include '../model/UserModel.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   
   $exists_admin = findAdmin($conn, $email, $pass);
   $exists_staff = findStaff($conn, $email, $pass);
   $exists_client = findClient($conn, $email, $pass);

   if(mysqli_num_rows($exists_admin) > 0 || mysqli_num_rows($exists_staff) > 0 || mysqli_num_rows($exists_client) > 0){
      $error[] = 'user already exist!';
   } else {
      if($pass != $cpass){
         $error[] = 'password not matched!';
      } else {
         
         if($user_type == 'staff'){
            insertStaff($conn, $name, $email, $pass, $user_type);
         }
         elseif($user_type == 'admin'){
            insertAdmin($conn, $name, $email, $pass, $user_type);
         }
         elseif($user_type == 'user'){
            insertClient($conn, $name, $email, $pass, $user_type);
         }

         header('location:../view/login_form.php');
         exit;
      }
   }

   if(isset($error)){
      $_SESSION['register_error'] = $error;
      header('location:../view/register_form.php');
      exit;
   }
}
?>
