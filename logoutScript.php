<?php
session_start();
if (!isset($_SESSION['restraunt_email']) || !isset($_SESSION['user_email']) ) {
    header('location: index.php');
}
session_destroy();
header('location: index.php');
?>