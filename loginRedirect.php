<?php
require "includes/dbConnection.php";
?>

<?php
include "includes/header.php";
$id=$_REQUEST['id'];
?>
<?php 
 include "includes/navbar.php";
?>

<div class="container">
  <div class="row mt-5 mb-5">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row mt-5">
      <div class="col-lg-5 col-md-4 col-sm-4" style="margin:0 auto;">
      <div class="panel panel-primary" >
                <div class="panel-heading">
                      <h5>LOGIN</h5>
                </div>
                <div class="panel-body">
<form  action="loginRedirectScript.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user " aria-hidden="true"></span>  Email:</label>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
              <label><span class="glyphicon glyphicon-lock " aria-hidden="true"></span>  Password:</label>
              <input type="password" name="password" class="form-control"
              placeholder="Password">
            </div>
            <div class="form-group">
               <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Login as:</label>
              <select name="select" class="form-control">
                                                         <option>User</option>
</select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Login</button><br/></div>

          </form>
                </div>
      </div>
       </div>
     </div>
    </div>
   </div>
</div>
