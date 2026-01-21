<?php
@include '../../model/config.php';
session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login_form.php');
   exit();
}


if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM tbl_client WHERE id = $id");
    header("Location: manage_user.php");
    exit();
}

if (isset($_POST['add_user'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_type = 'user'; 

    if (!empty($name) && !empty($email) && !empty($_POST['password'])) {
        mysqli_query($conn, "INSERT INTO tbl_client (name, email, password, user_type) VALUES ('$name', '$email', '$password', '$user_type')");
        header("Location: manage_user.php");
        exit();
    } else {
        $error = "Please fill all fields!";
    }
}

$users = mysqli_query($conn, "SELECT * FROM tbl_client");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manage Users</title>
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
          <li><a href="admin_page.php">Dashboard</a></li>
          <li><a href="../logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</section>


<section class="car-search text-center">
  <div class="container">
    <h2>Add New User</h2>
    <?php if(!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="" method="POST">
      <input type="text" name="name" placeholder="User Name" required>
      <input type="email" name="email" placeholder="User Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="add_user" value="Add User" class="btn btn-primary">
    </form>
  </div>
</section>


<section class="car-menu">
  <div class="container">
    <h2 class="text-center">All Registered Users</h2>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
      <tr class="text-center" style="background:#f5f5f5;">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>User Type</th>
        <th>Actions</th>
      </tr>
      <?php while($row = mysqli_fetch_assoc($users)) { ?>
      <tr class="text-center">
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['user_type']); ?></td>
        <td>
          <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
          <a href="manage_user.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
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

<?php include("../footer/footer_1.php"); ?>

</body>
</html>
