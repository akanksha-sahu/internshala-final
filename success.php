
<?php

require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require 'include/link.php';
        ?>
    </head>      
    <body>
        <style>
            #content{
                padding-top: 100px;
                padding-bottom: 300px;
            } 
        </style>
            
        <?php
        require 'include/header3.php';
        ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Thank you for ordering from E-Store. Your order shall be delivered<br>to you shortly.</h3><hr>
                    <p align="center">Order some more electronic items <a href="home.php">here.</a></p>
                </div>
            </div>
        </div>
       <?php
        require 'include/footer.php';
        ?>
    </body>
</html>

