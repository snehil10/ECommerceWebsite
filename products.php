<?php 
    require 'includes/common.php';
    require 'includes/added.php';
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
        <title>Our Products</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
            <div class="products">
                <div class="thumbnail">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/canondslr.jpg">
                                <div class="caption">
                                    <h3>Canon DSLR</h3>
                                    <p>Rs. 36000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(1)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=1" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/nikondslr.jpg">
                                <div class="caption">
                                    <h3>Nikon DSLR</h3>
                                    <p>Rs. 40000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(2)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=2" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/sonydslr.jpg">
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Rs. 45000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(3)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=3" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/olymusdslr.jpg">
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Rs. 50000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(4)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=4" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/titan301.jpg">
                                <div class="caption">
                                    <h3>Titan Model #301</h3>
                                    <p>Rs. 13000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(5)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=5" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/titan201.jpg">
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Rs. 3000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(6)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=6" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/hmt.jpg">
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Rs. 8000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(7)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=7" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/faber.jpg">
                                <div class="caption">
                                    <h3>Faber Luba #111</h3>
                                    <p>Rs. 18000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(8)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=8" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/handw.jpg">
                                <div class="caption">
                                    <h3>H&W</h3>
                                    <p>Rs. 800</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(9)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=9" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/luisphil.jpg">
                                <div class="caption">
                                    <h3>Luis Phil</h3>
                                    <p>Rs. 1000</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(10)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=10" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/johnzok.jpg">
                                <div class="caption">
                                    <h3>John Zok</h3>
                                    <p>Rs. 1500</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(11)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=11" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="thumbnail">
                                <img src="images/jhalsani.jpg">
                                <div class="caption">
                                    <h3>Jhalsani</h3>
                                    <p>Rs. 1300</p>
                                </div>
                                <?php
                                    if(!isset($_SESSION['id'])) {
                                        echo '<a href="login.php" type="button" class="btn btn-primary btn-block">Buy Now</a>';
                                    } else {
                                        if(check_if_added_to_cart(12)){
                                            echo '<a type="button" class="btn btn-primary btn-block" disabled>Added to Cart</a>';
                                        } else {
                                            echo '<a href="cart-add.php?id=12" type="button" class="btn btn-primary btn-block">Add to Cart</a>';
                                        }
                                    }
                                ?>
                            </div>
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
