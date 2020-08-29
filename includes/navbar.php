 <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white shadow">
	      	<ul class="navbar-nav font-weight-bold">
	      	<li class="nav-item"> 
           <a class="nav-link text-dark" href="index.php" target="_blank">
           	<h4>FOODSHALA</h4>
           </a>
           </li>
           </ul>

           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
              <?php
                      if (isset($_SESSION['restraunt_email'])) {
                      
                    ?>
              <li class="nav-item"><a href="restrauntAdminPage.php" class="nav-link text-dark mr-5">DASHBOARD</a></li>
             <li class="nav-item"><a href="logoutScript.php" class="nav-link text-dark mr-5">LOGOUT</a></li>

             <?php
               }else if(isset($_SESSION['user_email'])){
                ?>
                <li class="nav-item"><a href="orderSummary.php" class="nav-link text-dark mr-5"><span class="glyphicon glyphicon-user "></span>CART</a></li>
                <li class="nav-item"><a href="customerOrderList.php" class="nav-link text-dark mr-5"><span class="glyphicon glyphicon-user "></span>MY ORDERS</a></li>
                <li class="nav-item"><a href="logoutScript.php" class="nav-link text-dark mr-5">LOGOUT</a></li>
                <?php
              }else{
                ?>
             <li class="nav-item"><a href="#" class="nav-link text-dark mr-5" data-toggle="modal" data-target="#login">LOGIN</a></li>
             <li class="nav-item"><a href="#" class="nav-link text-dark mr-5" data-toggle="modal" data-target="#signUp">SIGN UP</a></li>
             <?php
               }
              ?>
           </ul>
           </div>
         </nav>

  <div class="modal fade" id="signUp" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h3 class="text-light">SIGNIN AS</h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-right">
          <div class="text-center pt-5 pb-5">
          <a href="customerRegistration.php?error="><button class="btn btn-success btn-md mr-4"type="submit">Customer</button></a>
          <a href="restrauntRegistration.php?error="><button class="btn btn-danger btn-md "type="submit">Restraunt</button> </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content bg-secondary" >
        <div class="modal-header">
          <h3 class="text-light">LOGIN </h3>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body justify-content-center">
          <form  action="loginScript.php" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Email:</label>
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
                                                         <option>Restraunt</option>
</select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-md">Login</button><br/></div>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>