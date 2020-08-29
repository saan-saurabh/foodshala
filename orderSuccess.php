<?php
require "includes/dbConnection.php";
if (!isset($_SESSION['user_email'])) {
    header('location: index.php');
}
$email=$_SESSION['user_email'];
$status="confirmed";
?>
<?php
include "includes/header.php";
?>
<?php 
 include "includes/navbar.php";
?>
<?php
$query = "UPDATE  orders SET status ='$status' WHERE customer_email = '$email'";
   mysqli_query($con, $query) or die($mysqli_error($con));
   echo "<script type='text/javascript'>alert('Your Order placed Successfully');window.location.href='userPortal.php';</script>";

?>