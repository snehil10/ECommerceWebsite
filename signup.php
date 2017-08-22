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
        <title>Sign Up</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <div class="col-md-7">
                        <h1>Create Account</h1>
                        <p>It's free. It's easy and it's just a few clicks away.</p>
                        <p>No hassle. Just fill in some information and you are ready to go.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 style="text-align: center">Sign Up</h3>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="signup_script.php">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your Full Name" maxlength="100" autofocus required>   
                                    </div>
                                    <div class="form-group">
                                        <div class="text-danger"><b>
                                            <?php
                                                if(isset($_GET['acc_error']))
                                                    if($_GET['acc_error']==1)
                                                        echo "An account with this email is already present";
                                                    else echo "Invalid email id";
                                            ?></b>
                                        </div>
                                        <label for="email">Email Id</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required> 
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="text-danger"><b>
                                        <?php
                                            if(isset($_GET['password_error']))
                                                echo "Password must be more than 6 characters";
                                        ?></b>
                                        </div>
                                        <label for="password1">Choose Password</label>
                                        <input type="password" name="password1" class="form-control" 
                                               placeholder="Enter your password. Minimum 6 characters." pattern=".{6,}" required>    
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="text-danger"><b>
                                        <?php
                                            if(isset($_GET['confirm_error']))
                                                echo "Passwords do not match";
                                        ?></b>
                                        </div>
                                        <label for="password2">Confirm Password</label>
                                        <input type="password" name="password2" class="form-control" 
                                               placeholder="Enter your password again" pattern=".{6,}" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-danger"><b>
                                        <?php
                                            if(isset($_GET['contact_error']))
                                                echo "Not a valid mobile number.";
                                        ?></b>
                                        </div>
                                        <label for="contact">Mobile No.</label>
                                        <input type="number" name="contact" class="form-control" placeholder="Enter your mobile no." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter your city" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" rows="3" class="form-control" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>
                                </form>
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
