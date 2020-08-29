<?php
require "includes/dbConnection.php";
?>
<?php
include "includes/header.php";
?>
<?php 
 include "includes/navbar.php";
?>
<?php
$id=$_REQUEST['id'];
              $query = "SELECT * FROM restraunts WHERE restraunt_id='$id'"; 
              $result = mysqli_query($con, $query)or die($mysqli_error($con));
              $num = mysqli_num_rows($result);
              $row=mysqli_fetch_array($result);

              ?>
<section class="restrauntMenu">
<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col-lg-6 col-sm-6 col-md-6 mainDiv">
			<div class="heading mb-3">
			<div class="menuHeading"><?php echo $row['restraunt_name'] ?></div>
      <span class="subhead"><?php echo "Address: ".$row['restraunt_address'] ?></span><br/>
      <span class="subhead"><?php echo "Contact: ".$row['restraunt_contact'] ?></span>
		</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="text-dark font-weight-bold">Menu</div>
					<p class="dishType">Breakfast</p>
					<!--<div class="dishDetails">-->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            
					
<table style="width: 100%;margin: 0 auto;">
  <tbody>
          <?php
          $que = "SELECT * FROM dishes WHERE restraunt_id='$id' AND category='Breakfast'"; 
                    $res = mysqli_query($con, $que)or die($mysqli_error($con));
                    $numm = mysqli_num_rows($res);
            if($numm>=1)
            {
                         while($roww=mysqli_fetch_array($res))
                         {
                          
                          echo "<tr><td>";if($roww['type']=="Veg"){echo "<i class='fa fa-dot-circle-o mr-1 text-success'  aria-hidden='true'></i>";}else{echo "<i class='fa fa-dot-circle-o mr-1 text-danger'  aria-hidden='true'></i>";}echo $roww['dish_name']."</td>";
                         if(!isset($_SESSION['user_email']))
                            {
                              echo  "<td class='text-right'><span class='mr-2'>Rs. ".$roww['price']."</span><a href='loginRedirect.php?id=$id'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                            }
                            
                            else {
                          echo "<td class='text-right'><span class='mr-2'>Rs. ".$roww['price']."</span><a href='confirmation.php?id=$id&dishId={$roww['dish_id']}'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                  }

                        }
                        
                    
                   
                        }
                          else{
                              echo "<p class='dishName text-danger'>No Breakfast Available</p>";
                         }
            ?>
            <!--</div>-->
          </tbody>
        </table>
          </div>
        </div>
          <hr/>


                 <p class="dishType">Maincourse</p>
<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            
          
<table style="width: 100%;margin: 0 auto;">
  <tbody>
					 <?php
					$que1 = "SELECT * FROM dishes WHERE restraunt_id='$id' AND category='Main Course'"; 
                    $res1 = mysqli_query($con, $que1)or die($mysqli_error($con));
                    $numm1 = mysqli_num_rows($res1);
						if($numm1>=1)
						{
                         while($roww1=mysqli_fetch_array($res1))
                         {
                          echo "<tr><td>";if($roww1['type']=="Veg"){echo "<i class='fa fa-dot-circle-o mr-1 text-success'  aria-hidden='true'></i>";}else{echo "<i class='fa fa-dot-circle-o mr-1 text-danger'  aria-hidden='true'></i>";}echo $roww1['dish_name']."</td>";

                          if(!isset($_SESSION['user_email']))
                            {
                            	echo  "<td class='text-right'><span class='mr-2'>Rs. ".$roww1['price']."</span><a href='loginRedirect.php?id=$id'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                            }
                            else{
                          echo "<td class='text-right'><span class='mr-2'>Rs. ".$roww1['price']."</span><a href='confirmation.php?id=$id&dishId={$roww1['dish_id']}'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                  }
                        }
}
                         	else{
                              echo "<p class='dishName text-danger'>No Maincourse Available</p>";
                         }
						?>
				    </tbody>
        </table>
          </div>
        </div>
          <hr/>

<p class="dishType">Chinese</p>
					
<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            
          
<table style="width: 100%;margin: 0 auto;">
  <tbody>
					<?php
					$que2 = "SELECT * FROM dishes WHERE restraunt_id='$id' AND category='Chinese'"; 
                    $res2 = mysqli_query($con, $que2)or die($mysqli_error($con));
                    $numm2 = mysqli_num_rows($res2);
						if($numm2>=1)
						{
                         while($roww2=mysqli_fetch_array($res2))
                         {
                         	echo "<tr><td>";if($roww2['type']=="Veg"){echo "<i class='fa fa-dot-circle-o mr-1 text-success'  aria-hidden='true'></i>";}else{echo "<i class='fa fa-dot-circle-o mr-1 text-danger'  aria-hidden='true'></i>";}echo $roww2['dish_name']."</td>";
                           if(!isset($_SESSION['user_email']))
                            {
                            	echo  "<td class='text-right'><span class='mr-2'>Rs. ".$roww2['price']."</span><a href='loginRedirect.php?id=$id'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                            }
                            else{
                          echo "<td class='text-right'><span class='mr-2'>Rs. ".$roww2['price']."</span><a href='confirmation.php?id=$id&dishId={$roww2['dish_id']}'><button class='btn btn-secondary btn-sm button' >+</button></a></td></tr>";
                  }
                        }
}
                         	else{
                              echo "<p class='dishName text-danger'>No Chinese Available</p>";
                         }
						?>
						</tbody>
        </table>
          </div>
        </div>
          <hr/>

					<p class="dishType">Add On</p>
<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            
          
<table style="width: 100%;margin: 0 auto;">
  <tbody>
					  
					<?php
					$que3 = "SELECT * FROM dishes WHERE restraunt_id='$id' AND category='Add On'"; 
                    $res3 = mysqli_query($con, $que3)or die($mysqli_error($con));
                    $numm3 = mysqli_num_rows($res3);
						if($numm3>=1)
						{
                         while($roww3=mysqli_fetch_array($res3))
                         {
                         	echo "<tr><td>";if($roww3['type']=="Veg"){echo "<i class='fa fa-dot-circle-o mr-1 text-success'  aria-hidden='true'></i>";}else{echo "<i class='fa fa-dot-circle-o mr-1 text-danger'  aria-hidden='true'></i>";}echo $roww3['dish_name']."</td>";
                           if(!isset($_SESSION['user_email']))
                            {
                            	echo  "<td class='text-right'><span class='mr-2'>Rs. ".$roww3['price']."</span><a href='loginRedirect.php?id=$id'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                            }
                            else{
                          echo "<td class='text-right'><span class='mr-2'>Rs. ".$roww3['price']."</span><a href='confirmation.php?id=$id&dishId={$roww3['dish_id']}'><button class='btn btn-secondary btn-sm button' >+</button></a></td></tr>";
                  }
                        }
}
                         	else{
                              echo "<p class='dishName text-danger'>No Add Ons Available</p>";
                         }
						?>
						</tbody>
        </table>
          </div>
        </div>
          <hr/>
<p class="dishType">Beverages</p>
<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            
          
<table style="width: 100%;margin: 0 auto;">
  <tbody>					  
					<?php
					$que4 = "SELECT * FROM dishes WHERE restraunt_id='$id' AND category='Beverages'"; 
                    $res4 = mysqli_query($con, $que4)or die($mysqli_error($con));
                    $numm4 = mysqli_num_rows($res4);
						if($numm4>=1)
						{
                         while($roww4=mysqli_fetch_array($res4))
                         {
                         	echo "<tr><td>";if($roww4['type']=="Veg"){echo "<i class='fa fa-dot-circle-o mr-1 text-success'  aria-hidden='true'></i>";}else{echo "<i class='fa fa-dot-circle-o mr-1 text-danger'  aria-hidden='true'></i>";}echo $roww4['dish_name']."</td>";
                         if(!isset($_SESSION['user_email']))
                            {
                            	echo  "<td class='text-right'><span class='mr-2'>Rs. ".$roww4['price']."</span><a href='loginRedirect.php?id=$id'><button class='btn btn-sm btn-secondary' type='submit' value='submit'>+</button></a></td></tr>";
                            }
                            else{
                          echo "<td class='text-right'><span class='mr-2'>Rs. ".$roww4['price']."</span><a href='confirmation.php?id=$id&dishId={$roww4['dish_id']}'><button class='btn btn-secondary btn-sm button' >+</button></a></td></tr>";
                  }
                        }
}
                         	else{
                              echo "<p class='dishName text-danger'>No Beverages Available</p>";
                         }
						?>
						</tbody>
        </table>
          </div>
        </div>
          <hr/>

<?php 
if(!isset($_SESSION['user_email']))
{
	            echo "<a href='loginRedirect.php?id=$id'><button class='btn btn-block btn-success' type='submit' value='submit'>CheckOut</button></a>";

}
else
{
	echo "<a href='orderSummary.php'><button class='btn btn-block btn-success' type='submit' value='submit'>CheckOut</button></a>";

}
 ?>





				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php
include "includes/footer.php";
?>