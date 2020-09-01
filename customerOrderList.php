<?php
require "includes/dbConnection.php";
if (!isset($_SESSION['user_email'])) {
    header('location: index.php');
}
?>
<?php
include "includes/header.php";
?>

<?php 
 include "includes/navbar.php";
?>
<section class="orderSummary">
<div class="container">
	<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
					
<?php
                    $email=$_SESSION['user_email'];
					$query = "SELECT dish_name, price, category, restraunt_email FROM dishes d inner join orders o on d.dish_id=o.dish_id WHERE customer_email='$email' AND status='confirmed'";
                    $result = mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    if($num>=1)
					{
						echo "<table class='table table-striped'>
						<thead>
							<th>Dish Name</th>
							<th>price</th>
							<th>category</th>
							<th>Restraunt</th>
						</thead>
						<tbody>";
                    while($row=mysqli_fetch_array($result)){
                    	$query1 = "SELECT restraunt_name, restraunt_contact FROM restraunts where restraunt_email='{$row['restraunt_email']}'";
                    $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                    $num1 = mysqli_num_rows($result1);
                    $row1=mysqli_fetch_array($result1);
                    
                    echo "<tr><td>".$row['dish_name']."</td>
								<td>".$row['price']."</td>
								<td>".$row['category']."</td>
								<td>".$row1['restraunt_name']."</td>
							</tr>";

                    }
                }
                else
						{
						echo "<span class='font-weight-bold text-danger'>You have not ordered anything till!!</span>";
						}
                    ?>
                    </tbody>
					</table>
				</div>
			</div>
		</div>
		</section>
		
