<?php
require "includes/dbConnection.php";
if (!isset($_SESSION['restraunt_email'])) {
    header('location: index.php');
}
?>
<?php
include "includes/header.php";
?>
<?php 
 include "includes/navbar.php";
?>
<section class="restrauntDishAdd">
<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row">
			<div class="col-lg-5 col-md-4 col-sm-4" style="margin:0 auto;">
			<div class="panel panel-primary" >
                <div class="panel-heading">
                      <h5>Dish Details</h5>
                </div>
                <div class="panel-body">
			<form action="restrauntDishAddScript.php" method="POST">
				<div class="form-group">
				<input class="form-control" type="text" name="dishName" placeholder="Dish Name" required="true"/>
			    </div>
				<div class="form-group">
				<input class="form-control" type="number" name="price" placeholder="Price" required="true"/>
				</div>
				<div class="form-group">
				  
                            <select name="select" class="form-control">
                                     <option>Breakfast</option>
                                     <option>Main Course</option>
                                     <option>Chinese</option>
                                     <option>Add On</option>
                                     <option>Beverages</option>
                            </select>
                  </div>
                  <div class="form-group" style="display:flex; justify-content:space-around; font-weight: bold;">
					<label for="radio">Type: </label>
					<div>
				      <input type="radio" name="radio" value="Veg"/> Veg
			        </div>
			         <div>
				        <input type="radio" name="radio" value="Non-veg"/>Non-Veg
			          </div>
			    </div>

				<div class="form-group">
				<button class="btn btn-block btn-danger" type="submit" value="Register">Add</button>
				</div>

			</form>
		  </div>
	    </div>
       </div>
     </div>
    </div>
   </div>
</div>
</section>
