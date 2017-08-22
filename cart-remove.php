<?php
    require 'includes/common.php';
    $user = $_SESSION['id'];
    $id = $_GET['id'];
    echo $id . "  " . $user;
    $query = " delete from users_items where user_id = $user and id = $id and status='Added to Cart' ";
    $result = mysqli_query($con, $query);
    header('location: cart.php');
?>