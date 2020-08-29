<?php
$id=$_REQUEST['id'];
$dishId=$_REQUEST['dishId'];
echo "<script type='text/javascript'>alert('1 item added to cart');window.location.href='dishOrder.php?id={$id}&dishId={$dishId}';</script>";
?>