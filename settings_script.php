<?php
    require 'includes/common.php';
    if(!isset($_SESSION['id']))
        header('location: index.php');
    $oldpassword = md5($_POST['oldpass']);
    $newpassword1 = $_POST['newpass1'];
    $newpassword2 = $_POST['newpass2'];
    $user = $_SESSION['id'];
    $query = "SELECT * from users where id = '$user' and password = '$oldpassword'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if(mysqli_num_rows($result)==0) {
        header('location: settings.php?oldpass_error=1');
    } else if(strlen($newpassword1)<6) {
        header('location: settings.php?password_error=1');
    } else if($newpassword1!=$newpassword2) {
        header('location: settings.php?confirm_error=1');
    } else {
        $newpassword1 = md5($newpassword1);
        $query = "UPDATE users SET password = '$newpassword1' where users.id = '$user'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: settings.php?success=1');
    }
?>

