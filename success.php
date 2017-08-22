<?php 
    require 'includes/common.php';
    if(!isset($_SESSION['id'])) {
        header('location: index.php');
    }
    $user = $_SESSION['id'];
    $query = "UPDATE users_items SET status='Confirm' where user_id = $user";
    $result = mysqli_query($con, $query);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Success</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Congratulations</h1>
                <h2>Your order is confirmed. Thank you for shopping with us.</h2>
                <p><a href="products.php">Click here</a> to purchase any other item.</p>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>
