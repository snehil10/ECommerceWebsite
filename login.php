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
        <title>Log In</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron" id="jumbo">
                <div class="col-md-7">
                    <h1>Log In</h1>
                    <p>It makes it easier for both of us to keep track of your purchases.</p>
                </div>
                <div class="col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 style="text-align: center">Log In</h3>
                        </div>
                        <div class="panel-body">
                            <div class="text-danger"><b>
                                <?php
                                    if(isset($_GET['login_error']))
                                        echo $_GET['login_error'];
                                ?></b>
                            </div>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <label for="email">Email Id:</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@something.something" autofocus required><br>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password." required><br>
                                    <button type="submit" class=" btn btn-primary btn-block">Log In</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <label>Do not have an account?</label>
                            <a href="signup.php">Register</a>
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
