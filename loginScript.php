<?php
require "includes/dbConnection.php";

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password= MD5($password);
$type=$_POST['select'];
$type= mysqli_real_escape_string($con, $type);

if($type=="User")
{
	$query = "SELECT * FROM users WHERE user_email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
  $_SESSION['user_email'] = $row['user_email'];
  $_SESSION['user_id'] = $row['user_id'];

if ($num == 1) { 
 header('location: userPortal.php');
} 

else{
echo "<script type='text/javascript'>alert('Not a valid UserId and Password');window.location.href='index.php';</script>";

}
}


else if($type=="Restraunt")
{

	$query = "SELECT * FROM restraunts WHERE restraunt_email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
  $_SESSION['restraunt_email'] = $row['restraunt_email'];
  $_SESSION['restraunt_id']=$row['restraunt_id'];
if ($num == 1) { 
  header('location: restrauntAdminPage.php'); 
} 
else{
echo "<script type='text/javascript'>alert('Not a valid RestrauntId and Password');window.location.href='index.php';</script>";
}
}
?>