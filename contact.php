


<!DOCTYPE html>
<html >
    <head>
        <?php
        require 'include/link.php';
        ?>
    </head>
    <style>
        .row_style{
            margin-top: 100px;
            margin-bottom: 100px;
        }
        #textbox{
            height: 200px;
            width: 750px;
        }
    </style>
    <body>
        <?php
        require 'include/header.php';
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-md-8 col-sm-8">
        <h1>LIVE SUPPORT</h1>
        <h3> 24 hours | 7 days a week |365 days a year Live Technical Support </h3>
         <p>Feel free to ask your queries anytime, we are always here to help you.</p>
        <p>Got a question? We'd love to hear from you.</p>
        <p>Send us a message and we'll respond as soon a s possible. Fill out the form below to learn more!</p>
        </div>
                <div class="col-md-4 col-sm-4">
                    <center>
                    <img src="include/conimg.jpg" alt="Responsive image">
                    </center>
                </div>
        </div>
        </div>
        <div class="container">
            <div class="row row_style">
            <div class="col-md-8 col-sm-8">
                <h2>CONTACT US</h2>
                <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="Name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email">
                        </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="text" class="form-control" id="textbox" name="Message" placeholder="Enter your message here" >
                </div> 
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
                <div class="col-md-4 col-sm-8">
                    <h2>Company Information:</h2>
                    <p>WA-505 Shakarpur</p>
                    <p>Laxminagar, New Delhi</p>
                    <p>India</p>
                    <p>Phone: +91-123-000000</p>
                    <p>Fax: (000) 000 00 00 0</p>
                    <p>Email: info@mycompany.com</p>
                    <p>Follow on: Facebook, Twitter & Instagram</p>
                </div>
            </div>
        </div>
       <?php
        require 'include/footer.php';
        ?>
    </body>
</html>

