<?php
require "includes/dbConnection.php";
$id=$_REQUEST['id'];

  $name = $_POST['dishName'];
  $name = mysqli_real_escape_string($con, $name);

  $price = $_POST['price'];
  $price = mysqli_real_escape_string($con, $price);

  $category=$_POST['select'];
  $category= mysqli_real_escape_string($con, $category);

  $type=$_POST['radio'];

  $query = "UPDATE  dishes SET dish_name ='$name', price='$price',category='$category', type='$type' WHERE dish_id = '$id'";
   mysqli_query($con, $query) or die($mysqli_error($con));
echo "<script type='text/javascript'>alert('Dish detail updated Successfully');window.location.href='restrauntAdminPage.php';</script>";
   ?>