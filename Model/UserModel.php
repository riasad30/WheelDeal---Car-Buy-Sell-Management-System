<?php
@include 'config.php';


//Login function start

function findAdmin($conn, $email, $pass) {
    $select = "SELECT * FROM tbl_admin WHERE email = '$email' && password = '$pass'";
    return mysqli_query($conn, $select);
}


function findStaff($conn, $email, $pass) {
    $select = "SELECT * FROM tbl_staff WHERE email = '$email' && password = '$pass'";
    return mysqli_query($conn, $select);
}


function findClient($conn, $email, $pass) {
    $select = "SELECT * FROM tbl_client WHERE email = '$email' && password = '$pass'";
    return mysqli_query($conn, $select);
}




//reg function start

function insertStaff($conn, $name, $email, $pass, $user_type) {
    $insert = "INSERT INTO tbl_staff (name, email, password, user_type) 
               VALUES ('$name','$email','$pass','$user_type')";
    return mysqli_query($conn, $insert);
}


function insertAdmin($conn, $name, $email, $pass, $user_type) {
    $insert = "INSERT INTO tbl_admin (name, email, password, user_type) 
               VALUES ('$name','$email','$pass','$user_type')";
    return mysqli_query($conn, $insert);
}


function insertClient($conn, $name, $email, $pass, $user_type) {
    $insert = "INSERT INTO tbl_client (name, email, password, user_type) 
               VALUES ('$name','$email','$pass','$user_type')";
    return mysqli_query($conn, $insert);
}
?>
