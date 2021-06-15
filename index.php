<?php
require("include/common.php");

// Redirects the user to home page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php
        require 'include/link.php';
        ?>
    <!--External css file-->
    <link href="index.css" rel="stylesheet" type="text/css" >

   </head>      
    <body>
 <?php 
 require 'include/header.php';
       ?>
        
        <div class="container">
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
                          <a href="#myModal" data-toggle = "modal" data-target= "#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a>  
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
                          <a href="#myModal" data-toggle = "modal" data-target= "#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a>   
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
                       
                          <a href="#myModal" data-toggle = "modal" data-target= "#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a>   
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
                       
                          <a href="#myModal" data-toggle = "modal" data-target= "#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a>    
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
                       
                          <a href="#myModal" data-toggle = "modal" data-target= "#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a>    
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
                       
                        <a href="#myModal" data-toggle = "modal" data-target= "#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a>  
                        </div>
                    </div>
                </div>
            </div>  
    </div>
        
        <div class="modal fade" id="myModal" role="dialog">
    <form method="POST" action="login_submit.php">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="text-align: right;">&times;</button>
                <h2 class="modal-title">LOGIN</h2> 
            </div>
            <div class="modal-body">
  
                <p>Don't have an account?<a href="signup.php">Register</a> 
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                 <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                 </div>
            </div>
            <!--div class="modal-footer"-->
            <a href="login_submit.php"><button class="btn btn-primary">Login</button></a><br><br>
                <p><a href="settings.php">  Forgot Password?  </a></p>
            <!--/div-->
            
        
    </div>
</div>
</form>
</div>
          <?php
       require 'include/footer.php';
 ?>
    </body>
</html>
