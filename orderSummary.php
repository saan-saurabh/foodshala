<?php
require "includes/dbConnection.php";
if (!isset($_SESSION['user_email'])) {
    header('location: index.php');
}
$email=$_SESSION['user_email'];
?>

<?php
include "includes/header.php";
?>
<?php 
 include "includes/navbar.php";
?>
<section class="orderSummary">
	<div class="container">
	<div class="row mt-5 pt-2 pb-2 pl-1 pr-1">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row heading">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<p class="font-weight-bold orderSummr">Order Summary</p>
		</div>
		</div>
		
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8">
					<table class="table table-striped">
							
					<?php
					$query1 = "SELECT dish_name, price, category,id FROM dishes d inner join orders o on d.dish_id=o.dish_id WHERE customer_email='$email' AND status='pending'";
                    $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                    $num1 = mysqli_num_rows($result1);
					if($num1>=1)
					{
                          echo "<thead>
                          <th>Id</th>
							<th>Dish Name</th>
							<th>price</th>
							<th>category</th>
							<th></th>
						</thead>
						<tbody>";
                     while($row1 = mysqli_fetch_array($result1))
                     {
                     
				
							echo "<tr><td>".$row1['id']."</td>
							<td>".$row1['dish_name']."</td>
								<td>".$row1['price']."</td>
								<td>".$row1['category']."</td>
								<td><a  href='removeConfirmation.php?id={$row1['id']}'><i class='fa fa-trash text-danger' aria-hidden='true'></a></i></td>
							</tr>";
							}
							echo "<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a href='orderSuccess.php'><button class='btn btn-block btn-secondary ' type='submit' value='order'>Place Order</button></a></td>
					</tr>";
						}
                     else
						{
						echo "<span class='font-weight-bold text-danger'>Add dish first!</span>";
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
