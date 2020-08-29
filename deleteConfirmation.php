<?php
$id=$_REQUEST['id'];
echo "<script type='text/javascript'>if(window.confirm('Sure! Want to Remove this item?')){window.location.href='dishDeleteScript.php?id={$id}';}else{window.location.href='restrauntAdminPage.php';}</script>";
?>