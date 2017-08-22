<?php
    require 'includes/common.php';
    if (!isset($_SESSION['id'])) {
        header('location: index.php');
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
        <title>Settings</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron" id="jumbo">
                <center>
                    <form method="POST" action="settings_script.php" class="col-md-offset-3 col-md-6">
                        <h2>Change Password</h2><br>
                        <div class="text-danger" style="text-align: left"><b>
                            <?php
                                if(isset($_GET['oldpass_error']))
                                    echo "Incorrect Old password";
                            ?></b>
                        </div>
                        <input type="password" class="form-control" name="oldpass" placeholder="Your old password"><br>
                        <div class="text-danger"><b>
                            <?php
                                if(isset($_GET['password_error']))
                                    echo "Password should be atleast 6 characters long";
                            ?></b>
                        </div>
                        <input type="password" class="form-control" name="newpass1" placeholder="Enter new password(Minimum 6 characters)"
                               pattern=".{6,}"><br>
                        <div class="text-danger"><b>
                            <?php
                                if(isset($_GET['confirm_error']))
                                    echo "Passwords do not match";
                            ?></b>
                        </div>
                        <input type="password" class="form-control" name="newpass2" placeholder="Confirm password"
                               pattern=".{6,}"><br>
                        <center>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </center>
                        <h3 class="text-primary">
                            <?php 
                                if(isset($_GET['success']))
                                    echo 'Password Changed Successfully';
                            ?>
                        </h3>
                    </form>
                </center>
            </div>
        </div>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>
