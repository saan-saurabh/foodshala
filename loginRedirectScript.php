<?php
require "includes/dbConnection.php";
$id=$_REQUEST['id'];
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password= MD5($password);
$type=$_POST['select'];
$type= mysqli_real_escape_string($con, $type);

$query = "SELECT * FROM users WHERE user_email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
  $_SESSION['user_email'] = $row['user_email'];

if ($num == 1) { 
 header('location: restrauntMenu.php?id='.$id);
       
} 

else{
echo "<script type='text/javascript'>alert('Not a valid UserId and Password');window.location.href='loginRedirect.php';</script>";
}

