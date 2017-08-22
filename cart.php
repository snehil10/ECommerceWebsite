<?php 
    require 'includes/common.php';
    if(!isset($_SESSION['id'])) {
        header('location: index.php');
    }
    $user = $_SESSION['id'];
    $query = "select users_items.id, name, price from items INNER JOIN users_items on users_items.item_id=items.id "
            . "where users_items.user_id = $user and users_items.status='Added to Cart'";
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
        <title>Your Cart</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <div class="table-responsive col-md-offset-2 col-md-8">
                    <h2>Your Orders</h2>
                    <table class="table table-hover table-responsive" style="text-align: center">
                        <center>
                            <?php 
                                if(mysqli_num_rows($result)==0)
                                    echo '<h3 class="text-danger">Select some items first! </h3>';
                            ?>
                        </center>
                    <tbody>
                        <tr>
                            <th><p style="text-align: center">Item Number</p></th>
                            <th><p style="text-align: center">Item Name</p></th>
                            <th><p style="text-align: center">Price</p></th>
                            <th></th>
                        </tr>
                        <?php 
                            $sum = 0;
                            $index = 1;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td> <?php echo $index; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['price']; ?> </td>
                            <td> <a class="text-danger" href=' cart-remove.php?id=<?php echo $row['id']; ?>' ><span class="glyphicon glyphicon-remove"></span>Remove</a></td>
                        </tr>
                        <?php 
                            $sum = $sum + $row['price'];
                            $index++;
                            }
                        ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs. <?php echo $sum; ?></td>
                            <td><a href="success.php" class="btn btn-primary">Confirm</a></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo $row['name'];
            }
        ?>
        <?php
            include "includes/footer.php";
        ?>
    </body>
</html>
