<section class="restrauntList">
<div class="container">
	<div class="row pb-4">
        <div class="col-sm-12 pb-3">
          <p class="font-weight-bold bg-secondary ml-2 pl-1">Ready to serve you restraunts.. </p>
        </div>

        <div class="col-sm-9 innerRow">
        <?php
              $query = "SELECT * FROM restraunts";
              $result = mysqli_query($con, $query)or die($mysqli_error($con));
              $num = mysqli_num_rows($result);
              if($num >= 1)
              {
               while($row=mysqli_fetch_array($result))
                {
                 ?>
                 <div class="row ml-auto innerDiv">
                  <div class="ml-3">
                    <?php
                  echo "
                    <p class='restrauntName'><b>".$row['restraunt_name']."</b></p><p class='restrauntCtg'><i>".$row['restraunt_category']."</i></p>";
                  ?>
                </div>
                  <div class="mr-3">
                    <?php
                  echo "<a href='restrauntMenu.php?id={$row['restraunt_id']}'><button class='btn btn-danger btn-sm' type='submit' value='View Menu'>View Menu</button></a>";
                   ?>
                  </div>
                </div>
                <hr/>
                <?php
                }
              }
              ?>
            </div>
        	</div>
        </div>
</div>
</div>
</section>