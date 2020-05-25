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
                            <a href="checkout" class="nav-link">My Account</a>
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
                  
                <button class="btn btn-primary btn-sm mr-sm-3">
                    <i class="fa fa-shopping-cart"></i> <span>4 Items In Card</span>
                </button>
                           
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
					<li class="ml-3 active">Shop</li>
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
					<!-- title  -->
					<h3>Shop</h3>
					<p>Bootstrap’s styling and layout can be applied to a wide range of markup structures. This documentation aims to provide developers with best practice examples to demonstrate the use of Bootstrap itself and illustrate appropriate semantic markup, including ways in which potential accessibility concerns can be addressed.</p>

					<!-- boxs -->
					<div class="container" id="hotbox">
				        <div class="row">
				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6  my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title"><a href="#" id="protitle">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>

				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>

				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>
				            
				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>
				            
				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6  my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>

				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>

				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>
				            
				            <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>

				             <!-- card 1 -->
				            <div class="col-md-4 col-sm-6 my-1">
				                <div class="card">
				                    <img src="img/card1.png" class="card-img-top">
				                    <div class="card-body text-center">
				                        <h5 class="card-title "><a href="#">White Polo Shirt</a></h5>
				                        <p class="card-text">INR 199</p>
				                        <p class="btn-group ">
				                          <a href="details.php" class="btn btn-outline-secondary btn-sm">View Details</a>  
				                          <a href="#" class="btn btn-outline-primary btn-sm"><i class="fa fa-shopping-cart mr-2"></i>Add to card</a>
				                        </p>
				                    </div>
				                </div>
				            </div>
						</div> <!-- row end  -->

						<!-- pagination -->
						<nav aria-label="Page navigation ">
							<ul class="pagination justify-content-center mt-4 ">
								<li class="page-item "><a class="page-link  text-dark" href="shop.php">First Page</a></li>
								<li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
								<li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
								<li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
								<li class="page-item"><a class="page-link text-dark" href="#">4</a></li>
								<li class="page-item"><a class="page-link text-dark" href="#">Last Page</a></li>		
							</ul>
						</nav>


					</div>
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