<?php
@include '../../model/config.php';
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form.php');
   exit();
}


if(!isset($_GET['id'])){
   header('location:manage_user.php');
   exit();
}

$id = intval($_GET['id']);


$result = mysqli_query($conn, "SELECT * FROM tbl_client WHERE id = $id");
if(mysqli_num_rows($result) == 0){
   header('location:manage_user.php');
   exit();
}
$user = mysqli_fetch_assoc($result);


if(isset($_POST['update_user'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
   $password = $_POST['password'];

   if(!empty($password)){
     
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $query = "UPDATE tbl_client SET name='$name', email='$email', password='$hashed_password', user_type='$user_type' WHERE id=$id";
   } else {
     
      $query = "UPDATE tbl_client SET name='$name', email='$email', user_type='$user_type' WHERE id=$id";
   }

   mysqli_query($conn, $query);
   header("Location: manage_user.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit User</title>
   <link rel="stylesheet" href="../css/style_user.css">
</head>
<body>


<section class="navbar">
  <div class="container">
    <div class="logo">
      <a href="admin_page.php"><img src="../images/logo.png" alt="Logo" class="img-responsive" /></a>
    </div>
    <div class="menu text-left">
      <ul>
          <li><a href="manage_user.php" class="active">Manage Users</a></li>
          <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</section>


<section class="car-search text-center">
  <div class="container">
    <h2>Edit User</h2>
    <form action="" method="POST">
      <input type="text" name="name" placeholder="User Name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
      <input type="email" name="email" placeholder="User Email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
      <input type="password" name="password" placeholder="New Password (leave blank to keep current)">
      
      <input type="submit" name="update_user" value="Update User" class="btn btn-primary">
    </form>
  </div>
</section>


<?php include("../footer/footer_1.php"); ?>

</body>
</html>
