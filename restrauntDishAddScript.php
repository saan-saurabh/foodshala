<?php
require "includes/dbConnection.php";

$id=$_SESSION['restraunt_id'];

  $name = $_POST['dishName'];
  $name = mysqli_real_escape_string($con, $name);

  $price = $_POST['price'];
  $price = mysqli_real_escape_string($con, $price);

  $category=$_POST['select'];
  $category= mysqli_real_escape_string($con, $category);

  $type = $_POST['radio'];

  $query = "SELECT * FROM dishes WHERE dish_name='$name'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
  echo "<script type='text/javascript'>alert('Dish is already added');window.location.href='restrauntDishAdd.php';</script>";
  } 
  else {
    
    $query = "INSERT INTO dishes(restraunt_id, dish_name, price, category, type)VALUES('" . $id . "','" . $name . "','" . $price . "','" . $category . "','" . $type . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
echo "<script type='text/javascript'>alert('Dish added successfully');window.location.href='restrauntAdminPage.php';</script>";
  }
  ?>
