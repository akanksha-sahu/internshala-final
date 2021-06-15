<?php
require("include/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php
        require 'include/link.php';
        ?>
        <!--External css file-->
    <link href="home.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <?php
        include 'include/header2.php';
        include 'include/check-if-added.php';
        ?>
        <div class="container-fluid">
            <div class="row row_style">
               
                <div class='col-md-4 col-sm-6 home-feature'>
                    <div class='panel panel-default '>
                        <div class='panel-heading'>
                            <h4>IPHONE 11 PRO</h4> 
                        </div>
                        <div class="panel-body">
                            <img src="include/1.jpeg" alt="Responsive image"><br><br>
                            Screen Size:5.8" (1125 X 2436), Camera:12 + 12 + 12 | 12 MP, RAM:4 GB, Battery:3190 mAh,
                            Price: Rs.1,06,600
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                
                <div class='col-md-4 col-sm-6 home-feature'>
                    <div class='panel panel-default '>
                        <div class='panel-heading'>
                            <h4>HUAWEI P30 PRO</h4> 
                        </div>
                        <div class="panel-body">
                            <img src="include/02.jpeg" alt="Responsive image"><br><br>
                            Screen Size:6.47" (1080 X 2340), Camera:40 + 20 + 8 + TOF | 32 MP, RAM:8GB, Battery:4200 mAh,
                            Price:Rs.59990
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                </div>
                
                <div class='col-md-4 col-sm-6 home-feature'>
                    <div class='panel panel-default '>
                        <div class='panel-heading'>
                            <h4>SAMSUNG GALAXY NOTE10 PLUS</h4> 
                        </div>
                        <div class="panel-body">
                            <img src="include/03.jpeg" alt="Responsive image"><br><br>
                            Screen Size:6.8" (1440 X 3040),
                            Camera:12 + 16 + 12 + TOF | 10 MP,
                            RAM	:12 GB,
                            Battery:4300 mAh, Price:Rs.84200 
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                    </div>
                    </div>
                </div>
                
                <div class='col-md-4 col-sm-6 home-feature'>
                    <div class='panel panel-default '>
                        <div class='panel-heading'>
                            <h4>SAMSUNG GALAXY S10+</h4> 
                        </div>
                        <div class="panel-body">
                            <img src="include/04.jpeg" alt="Responsive image"><br><br>
                            Screen Size	:6.4" (1440 X 3040),
                            Camera:12 + 12 + 16 | 10 + 8 MP,
                             RAM:8GB,
                            Battery:4100 mAh,Price:Rs.73800
                       <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                    </div>
                    </div>
                </div>
                
                <div class='col-md-4 col-sm-6 home-feature'>
                    <div class='panel panel-default '>
                        <div class='panel-heading'>
                            <h4>ONEPLUS 7T PRO 256GB</h4> 
                        </div>
                        <div class="panel-body">
                            <img src="include/07.jpeg" alt="Responsive image"><br><br>
                            Screen Size:6.67" (1440 x 3120),
                               Camera:48 + 16 + 8 | 16 MP,
                                  RAM:8GB,
                                 Battery:4085 mAh, Price:Rs.47999
                                 <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                                    </div>
                    </div>
                </div>
                
                <div class='col-md-4 col-sm-6 home-feature'>
                    <div class='panel panel-default '>
                        <div class='panel-heading'>
                            <h4>IQOO 3 5G</h4> 
                        </div>
                        <div class="panel-body">
                            <img src="include/09.jpeg" alt="Responsive image"><br><br>
                            Screen Size	:6.44" (1080 x 2400),
                              Camera:48 + 8 + 13 + 2 | 16 MP,
                             RAM:6 GB,
                               Battery:4370 mAh, Price:Rs.36990
                               <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                            
            </div>
            <hr>
        </div>
    </body>                 
</html>
