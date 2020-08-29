<?php
require "includes/dbConnection.php";
$error=" ";

  $name = $_POST['restrauntName'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['restrauntEmail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['restrauntPassword'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $confirmPassword = $_POST['restrauntConfirmPassword'];
  $confirmPassword = mysqli_real_escape_string($con, $confirmPassword);
  $confirmPassword = MD5($confirmPassword);

  $address = $_POST['restrauntAddress'];
  $address = mysqli_real_escape_string($con, $address);

  $contact = $_POST['restrauntContact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $category = $_POST['radio'];


  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";
  $regex_pass="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$";

  $query = "SELECT * FROM restraunts WHERE restraunt_email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
   $error = "<span>ERROR: Email Already Exists</span>";
  header('location: restrauntRegistration.php?error=' . $error);
  } else if (!preg_match($regex_email, $email)) {
    $error = "<span>ERROR: Not a valid Email Id</span>";
  header('location: restrauntRegistration.php?error=' . $error);
  }else if(!preg_match($regex_pass, $password)) {
    $error = "<span>ERROR: Paasword should be of Min 8 character and should contain 1 number and 1 special character </span>";
  header('location: customerRegistration.php?error=' . $error);
}else if (!preg_match($regex_num, $contact)) {
    $error = "<span>ERROR: Not a valid phone number</span>";
  header('location: restrauntRegistration.php?error=' . $error);
  } else if($password!=$confirmPassword){
    $error="<span>ERROR: password and confirmpassword not same</span>";
      header('location: restrauntRegistration.php?error=' . $error);
  }
  else {
    
    $query = "INSERT INTO restraunts(restraunt_name, restraunt_email, password, restraunt_address, restraunt_contact, restraunt_category)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $address . "','" . $contact . "','" . $category . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $restraunt_id = mysqli_insert_id($con);
    $_SESSION['restraunt_email'] = $email;
    $_SESSION['restraunt_id'] = $restraunt_id;
    header('location: restrauntAdminPage.php');
  }
?>