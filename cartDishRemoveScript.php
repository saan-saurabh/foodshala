<?php
require "includes/dbConnection.php";
$id=$_REQUEST['id'];

$query = "DELETE FROM orders WHERE id='$id'";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    echo "<script type='text/javascript'>alert('Dish removed Successfully');window.location.href='orderSummary.php';</script>";


?>