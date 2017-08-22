<?php 
    require 'includes/common.php';
    if(isset($_SESSION['id'])) {
        header('location: products.php');
    }
    $email_id = mysqli_real_escape_string($con, trim($_POST['email']));
    $password = md5(mysqli_real_escape_string($con, trim($_POST['password'])));
    $query = "SELECT id, email from users where '$email_id' = users.email and '$password' = users.password ";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)==0) {
        header('location: login.php?login_error="Incorrect email/password"');
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        header('location: products.php'); 
    }   
?>