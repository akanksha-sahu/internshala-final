<?php
require_once("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require 'include/link.php';
        ?>
    </head>
    <style>
        .row{
            margin-top: 100px;
            margin-bottom: 100px;
        }
        #content{
                padding-bottom: 100px;
            } 
    </style>
    <body>
        <?php include 'include/header2.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h2>Change Password</h2>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>