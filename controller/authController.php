<?php
session_start();
@include '../model/config.php';
@include '../model/UserModel.php';

if(isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   
   $admin = findAdmin($conn, $email, $pass);
   if(mysqli_num_rows($admin) > 0) {
      $row = mysqli_fetch_array($admin);
      $_SESSION['admin_name'] = $row['name'];
      header("location:../view/admin/admin_page.php");
      exit;
   }

   

   $staff = findStaff($conn, $email, $pass);
   if(mysqli_num_rows($staff) > 0) {
      $row = mysqli_fetch_array($staff);
      $_SESSION['staff_name'] = $row['name'];
      header("location:../view/staff/staff_page.php");
      exit;
   }

   

   $client = findClient($conn, $email, $pass);
   if(mysqli_num_rows($client) > 0) {
      $row = mysqli_fetch_array($client);
      $_SESSION['user_name'] = $row['name'];
      header("location:../view/client/user_page.php");
      exit;
   }

   

   $error[] = 'Incorrect email or password';
   $_SESSION['login_error'] = $error;
   header("location:../view/login_form.php");
   exit;
}
?>
