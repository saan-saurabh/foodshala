<?php
require "includes/dbConnection.php";
$email=$_SESSION['user_email'];

$id=$_REQUEST['id'];
$dishId=$_REQUEST['dishId'];
$status="pending";
$query1="SELECT restraunt_email FROM restraunts WHERE restraunt_id='$id'";
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$row1 = mysqli_fetch_array($result1);
$email1=$row1['restraunt_email'];

$query = "INSERT INTO orders(restraunt_id, customer_email, dish_id, status,restraunt_email)VALUES('" . $id . "','" . $email . "','" . $dishId . "','" . $status . "','" . $email1 . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location:restrauntMenu.php?id='.$id);
?>