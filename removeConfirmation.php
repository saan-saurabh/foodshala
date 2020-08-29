<?php
$id=$_REQUEST['id'];
echo "<script type='text/javascript'>if(window.confirm('Sure! Want to Remove this item?')){window.location.href='cartDishRemoveScript.php?id={$id}';}else{window.location.href='orderSummary.php';}</script>";
?>