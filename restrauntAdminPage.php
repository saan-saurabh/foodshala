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
<section class="restrauntAdmin">
<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col-sm-9 col-lg-9 col-md-9">
			
<?php
$email=$_SESSION['restraunt_email'];
$query = "SELECT * FROM restraunts WHERE restraunts.restraunt_email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$id=$row['restraunt_id'];
if($num >= 1)
{
echo "<p class='restName'>".$row['restraunt_name']."</p>";


}
?>
			
		</div>
		<div class="col-sm-3 col-lg-3 col-md-3">
			<a href="restrauntDishAdd.php"><button class="btn btn-sm btn-secondary" type="submit" value="order">Add Item</button></a>
			<a href="prac.php"><button class="btn btn-sm btn-secondary" type="submit" value="order">View all Orders</button></a>
		</div>
	</div>
	<div class="row pt-2 pb-2 pl-1 pr-1">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<p class="font-weight-bold listItem">All listed Items</p>
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8">
					<table class="table table-striped restrauntTable">
						<thead>
							<th>Name</th>
							<th>price</th>
							<th>category</th>
							<th>Type</th>
							<th></th>
						</thead>
						<tbody>
							
					<?php
					$query1 = "SELECT * FROM dishes WHERE restraunt_id='$id' order by category";
                    $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                    $num1 = mysqli_num_rows($result1);
					if($num1>=1)
					{
                     while($row1 = mysqli_fetch_array($result1))
                     {
                     
				
							echo "<tr><td>".$row1['dish_name']."</td>
								<td>".$row1['price']."</td>
								<td>".$row1['category']."</td>
								<td>".$row1['type']."</td>
								<td><a href='dishEdit.php?id={$row1['dish_id']}'><i class='fa fa-pencil fa-1x mr-2 ' aria-hidden='true'></i></a><a  href='deleteConfirmation.php?id={$row1['dish_id']}'><i class='fa fa-trash text-danger' aria-hidden='true'></a></i></td>
							</tr>";
							}
						}
                     else
						{
						echo "<span class='text-danger'>No dish Available</span>";
						}
						?>
					
						</tbody>
					</table>
				</div>
					

			</div>
		</div>
	</div>
</div>
</section>
