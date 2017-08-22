<?php
    require 'includes/common.php';
    if(isset($_SESSION['id'])) {
        header('location: products.php');
    }
    
    $email_id = mysqli_real_escape_string($con, trim($_POST['email']));
    $password1 = mysqli_real_escape_string($con, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($con, trim($_POST['password2']));
    $name = mysqli_real_escape_string($con, trim($_POST['name']));
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    
    $query = "SELECT id, email from users where users.email = '$email_id'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
    if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
        header('location: signup.php?acc_error=2'); 
    } else if(mysqli_num_rows($result)!=0) {
        header('location: signup.php?acc_error=1');
    } else if(strlen($password1)<6){
        header('location: signup.php?password_error=1');
    } else if($password1!=$password2){
        header('location: signup.php?confirm_error=1');
    } else if($contact<'1000000000' || $contact>'9999999999'){
        header('location: signup.php?contact_error=1');
    } else {
        $password1 = md5($password1);
        $insert_query = "INSERT into users(name, email, password, contact, city, address) values ('$name', '$email_id', '$password1', '$contact', '$city', '$address')";
        $result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        
        $_SESSION['email'] = $email_id;
        $_SESSION['id'] = mysqli_insert_id($con);
        header('location: products.php');
    }
    intval
?>
