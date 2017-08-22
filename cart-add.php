<?php
    require 'includes/common.php';
    $item = $_GET['id'];
    $user = $_SESSION['id'];
    $query = "INSERT into users_items(user_id, item_id, status) VALUES ('$user', '$item', 'Added to Cart')";
    $result = mysqli_query($con, $query);
    header('location: products.php');
?>

