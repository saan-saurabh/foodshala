<?php
require "includes/dbConnection.php";
if (!isset($_SESSION['restraunt_email'])) {
    header('location: index.php');
}
$email=$_SESSION['restraunt_email'];
?>

<?php
include "includes/header.php";
?>
<?php 
 include "includes/navbar.php";
?>
<section class="orderList">
	<div class="container">
	<div class="row mt-5 pt-2 pb-2 pl-1 pr-1">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h5 class="font-weight-bold">Available Orders</h5>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<table class="table table-striped">
							
					<?php
					$query = "SELECT dish_name, price, category, customer_email FROM dishes d inner join orders o on d.dish_id=o.dish_id WHERE restraunt_email='$email' AND status='confirmed'";
                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
					if($num>=1)
					{
                          echo "<thead>
                          <th>Customer Name</th>
                          <th>Customer email</th>
                          <th>Customer contact</th>
							<th>Dish Name</th>
							<th>price</th>
							<th>category</th>
							
						</thead>
						<tbody>";
                    
                     
				while($row=mysqli_fetch_array($result)){
                    	$query1 = "SELECT user_name,user_email, contact FROM users d inner join orders o on d.user_email=o.customer_email WHERE restraunt_email='$email' AND status='confirmed'";
                    $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                    $num1 = mysqli_num_rows($result1);
                    $row1=mysqli_fetch_array($result1);
							echo "
							<tr>
							<td>".$row1['user_name']."</td>
							<td>".$row1['user_email']."</td>
							<td>".$row1['contact']."</td>
							<td>".$row['dish_name']."</td>
								<td>".$row['price']."</td>
								<td>".$row['category']."</td>
							
							</tr>";
							}
						}
                     else
						{
						echo "<span class='font-weight-bold text-danger'>No order Available!!</span>";
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
