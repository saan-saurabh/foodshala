<?php
require "includes/dbConnection.php";
$id=$_REQUEST['id'];

$query = "DELETE FROM dishes WHERE dish_id='$id'";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    echo "<script type='text/javascript'>alert('Dish Deleted Successfully');window.location.href='restrauntAdminPage.php';</script>";


?>
