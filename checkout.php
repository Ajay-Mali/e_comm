<?php require_once('includes/db.php');
      require_once('functions/functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>E commerce Store</title>
	<?php include('includes/csslinks.php'); ?>
</head>
   <body>
  <!--######################################### Top Bar Start  ######################################-->
         <?php include('includes/topbar.php'); ?>
  <!--######################################### Top Bar End #########################################-->

<!--######################################### Menu Bar Start  ######################################-->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                <a href="index.php" class="navbar-brand" style="text-decoration: none;">
                    <img src="img/brand.png" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav">
                        <li class="nav-item"> 
                            <a href="index.php" class="nav-link ">Home</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="shop.php" class="nav-link active">Shop</a>
                        </li>
                        <li class="nav-item"> 
                             <?php
                            if(!isset($_SESSION['customer_email']))
                            {
                                echo "<a href='checkout.php' class='nav-link'>My Account</a>";
                            }else{
                                echo "<a href='customer_area/my_account.php?my_order' class='nav-link'>My Account</a>";
                            }
                          ?>
                        </li>
                        <li class="nav-item"> 
                            <a href="card.php" class="nav-link">Shopping card</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="about.php" class="nav-link">About us</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="contactus.php" class="nav-link">Contact us</a>
                        </li>
                     </ul>
                </div>
                  
              <a href="card.php" class="btn btn-primary btn-sm mr-sm-3">
                    <i class="fa fa-shopping-cart"></i>  <span><?php item(); ?> Items In Card</span>
                </a>
                           
                <button class="btn btn-primary btn-sm "  data-toggle="collapse" data-target="#search">
                    <i class="fa fa-search"></i>
                </button>           
            </nav>
              <!-- collapse search -->              
             <div class="collapse clearfix" id="search">               
                <form class="form-inline">        
                   <div class="input-group mt-1">
                        <input type="text" placeholder="Search.." class="form-control">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-search"></i></button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
<!--######################################### Menu Bar End  ######################################-->

<!--######################################### Short nav Start  ######################################-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb mt-3 shadow-sm  bg-light"> 
					<li><a href="index.php" class="breadcrumb-item">Home</a></li>
					<li class="ml-3 active">Checkout</li>
				</ul>	
			</div>
		</div>
	</div>

<!--######################################### short nav End  ######################################-->

<!--######################################### Main Section End  ######################################-->
	<div class="container-fluid">
		<div class="row">
			<!--############# Side bar Start ##################-->
			<div class="col-md-3">
				<?php include("includes/sidebar.php"); ?>
			</div>
			<!--############# Side bar End ##################-->

			<!--############# Show section Start ##################-->
			<div class="col-md-9">
				<div class="container-fluid mt-md-0 my-3 p-3 shadow bg-light">
					<?php 
						if (!isset($_SESSION['customer_email'])) {
							include('customer_area/login.php');
						}else{
							include('payment_option.php');
						}
					?>
				</div>
			</div>
			<!--############# Show Section End ##################-->
		</div>
	</div>
<!--######################################### Main Section End  ######################################-->

<!--######################################### footer Start  ######################################-->
<?php include("includes/footer.php"); ?>
<!--######################################### footer end ######################################-->

<!--######################################### Js links  ######################################### -->
     <?php include("includes/jslinks.php"); ?>
</body>
</html>