<?php
require "includes/dbConnection.php";
$error=$_REQUEST['error'];
?>
<?php
include "includes/header.php";
?>

<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row">
			<div class="col-lg-5 col-md-4 col-sm-4" style="margin:0 auto;">
			<div class="panel panel-primary" >
                <div class="panel-heading">
                      <h5>Restraunt Details</h5>
                      <p class="font-weight-bold text-danger ml-1"><?php echo  $error; ?></p>
                </div>
                <div class="panel-body">
			<form action="restrauntRegistrationScript.php" method="POST">
				<div class="form-group">
				<input class="form-control" type="text" name="restrauntName" placeholder="Restraunt Name" required="true"/>
			    </div>
			    <div class="form-group">
				<input class="form-control" type="email" name="restrauntEmail" placeholder="Restraunt Email" required="true"/>
				</div>
				<div class="form-group">
				<input class="form-control" type="password" name="restrauntPassword" placeholder="Password" required="true"/>
				</div>
				<div class="form-group">
				<input class="form-control" type="password" name="restrauntConfirmPassword" placeholder="Confirm Password" required="true"/>
				</div>
				<div class="form-group">
				<input class="form-control" type="address" name="restrauntAddress" placeholder="Restraunt Address" required="true"/>
				</div>
				<div class="form-group">
				<input class="form-control" type="contact" name="restrauntContact" placeholder="Restraunt Contact" required="true"/>
				</div>
				<div class="form-group" style="display:flex; justify-content:space-around; font-weight: bold;">
					<label for="radio">Type: </label>
					<div>
				      <input type="radio" name="radio" value="Veg"/> Veg
			        </div>
			         <div>
				        <input type="radio" name="radio" value="Veg & Non-veg"/> Veg & Non-Veg
			          </div>
			    </div>
				<div class="form-group">
				<button class="btn btn-block btn-danger" type="submit" value="Register">Register</button>
				</div>

			</form>
		  </div>
	    </div>
       </div>
     </div>
    </div>
   </div>
</div>

<?php
include "includes/footer.php";
?>