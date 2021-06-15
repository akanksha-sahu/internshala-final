<?php

require("include/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 
  $name = mysqli_real_escape_string($con, $_POST['name']);

  
  $email = mysqli_real_escape_string($con,$_POST['email']);

  
  $password = mysqli_real_escape_string($con,$_POST['password']);
  $password = MD5($password);

  
  $contact = mysqli_real_escape_string($con, $_POST['contact']);

  
  $city = mysqli_real_escape_string($con,$_POST['city'] );

 
  $address = mysqli_real_escape_string($con,$_POST['address'] );

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    echo"<script>alert('email already exist')</script>";
    echo("<script>location.href='login.php'</script>");
  } else if (!preg_match($regex_email, $email)) {
     echo"<script>alert('email id not valid')</script>";
     echo("<script>location.href='signup.php'</script>");
  } else if (!preg_match($regex_num, $contact)) {
     echo"<script>alert('contact not valid')</script>";
    echo("<script>location.href='signup.php'</script>");
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: home.php');
  }
?>
