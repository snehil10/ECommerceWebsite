<!DOCTYPE html>
<?php 
    require 'includes/common.php';
    if(isset($_SESSION['id'])) {
        header('location: products.php');
    }
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
        <title>Lifestyle Store</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div id="content">
            <div id="banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>We sell Lifestyle</h1>
                            <a href="products.php" class="btn btn-danger btn-lg active" style="margin-top: 5px">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>    
        </div>
        <div class="products">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 30px">Our Products</h2>
                <div class="row">
                    <div class="thumbnail col-md-4 col-xs-12">
                        <img src="images/camera.jpg">
                        <div class="caption">
                            <h3>Cameras</h3>
                            <p>Now capture life like photos</p>
                        </div>
                    </div>
                    <div class="thumbnail col-md-4 col-xs-12">
                        <img src="images/watch.jpg">
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Perfection in your hand</p>
                        </div>
                    </div>
                    <div class="thumbnail col-md-4 col-xs-12">
                        <img src="images/shirt.jpg">
                        <div class="caption">
                            <h3>Shirts</h3>
                            <p>Best Fabrics and Designs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>
