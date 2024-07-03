<?php
require_once('config2.php');
?>
<?php

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body>

<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >Admin Login</h2>

<input type="text" class="form-control" name="admin_email" placeholder="Email Address" required >

<input type="password" class="form-control" name="admin_pass" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login" >

Log in

</button><br>
<div><center><h5>Or</h5></center></div><br>

<div class= "social-login">
          <center> <a href="index3.php"> <button style="background-color: #581f8a;
            border-color: #56385a; justify-content: right;
            font-weight: bold; text-decoration: none; font-size: 15px; border-radius: 3px; cursor: pointer;  
            width: 75%; height: 40px; background-repeat: no-repeat; background-size: 30px; align-content: center; 
            background-image: url('google.png');background-position: left; background-position-x: 18px; text-align: right;" 
            type="button" class="btn btn-danger">Login with Google</button></center></a>
    
</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>
<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;

echo "<script>alert('You are Logged in into admin panel')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>
