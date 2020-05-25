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
					<li class="ml-3 "><a href="shop.php" class="breadcrumb-item">Shop</a></li>
					<li class="ml-3 active">details</li>
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

			<!--############# detail Show section Start ##################-->
			<div class="col-md-9">
				<div class="container mt-2 mt-md-0">
					<div class="row p-2">
						<!-- col 1 -->
						 <div class="col-md-6 pt-3">
						 	<!-- product silder start -->
							 <div class="carousel slide carousel-fade shadow" data-ride="carousel" id="myslider">
				                 <ol class="carousel-indicators">
				                     <li data-target="#myslider" data-slide-to="0" class="active"></li>
				                     <li data-target="#myslider" data-slide-to="1"></li>
				                     <li data-target="#myslider" data-slide-to="2"></li>
				                 </ol>
				                 <div class="carousel-inner">
				                    <!-- 1st slider -->
				                     <div class="carousel-item active">
				                         <img src="img/1.jpg" class="img-thumbnail" >
				                     </div>
				                      <!-- 2nd slider -->
				                     <div class="carousel-item">
				                         <img src="img/2.jpg" class="img-thumbnail" >
				                     </div>
				                      <!-- 3th slider -->
				                     <div class="carousel-item">
				                         <img src="img/3.jpg" class="img-thumbnail" >
				                     </div>
				                 </div>
				                 <a href="#myslider" class="carousel-control-prev" role="button" data-slide="prev">
				                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				                       <span class="sr-only">Previous</span>
				                 </a>
				                  <a href="#myslider" class="carousel-control-next" role="button" data-slide="prev">
				                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
				                       <span class="sr-only">Next</span>
				                 </a>
			            	</div>
							<!-- product silder end -->
						 </div> 
						 	<!-- col 1 end-->
						 	<!-- col 2 -->
						 <div class="col-md-6 mt-3">
						 	<div class="">
						 		<!-- card title -->
						 		<div class="text-center"><h2>White Polo Shirt</h2></div>
						 		<!-- form -->
						 		<form class=" p-2">
						 				<div class="form-group">
						 					<div class="row">
							 					<label class="col-sm-4">Product Quantity :</label>
							 					<select class="form-control col-sm-7">
							 						<option>Select</option>
												    <option>1</option>
												    <option>2</option>
												    <option>3</option>
												    <option>4</option>
												    <option>5</option>
												</select>
						 					</div>
						 				</div>
						 				<div class="form-group">
						 					<div class="row"> 
							 					<label class="col-sm-4">Product Size :</label>
							 					<select class="form-control col-sm-7">
							 						<option>Select</option>
												    <option>Small</option>
												    <option>Medium</option>
												    <option>Large</option>
												    <option>Extra Large</option>
												</select>
						 					</div>
						 				</div>
						 		</form>
								<div class="text-center">
									<h2>INR 199</h2>
									<button class="btn btn-primary btn-sm">
										<i class="fa fa-shopping-cart mr-2"></i> Add To Card
									</button>
								</div>
								<div class="row mt-2 p-2">
									<div class="col-sm-4 mt-md-0 mt-2">
										<img src="img/1.jpg" class="img-fluid">
									</div>
									<div class="col-sm-4 mt-md-0 mt-2">
										<img src="img/2.jpg" class="img-fluid">
									</div>
									<div class="col-sm-4 mt-md-0 mt-2">
										<img src="img/3.jpg" class="img-fluid">
									</div>
								</div>
						 	</div>
						 </div>
					 	<!-- col 2 end -->
					</div>
				</div>
				<!-- product info details -->
				<div class="container mt-3 p-4">
					<div>
						<h3>Product Details</h3>
						<p class="text-justify">The Python Tutorial
							Python is an easy to learn powerful programming language. it has efficient
							highlevel data structures and a simple but effective approach to object-oriented
							programming python`s elegant syntax and dynamic typing together with its
							interpreted nature, make it an ideal language for scripting and rapid application
							development in many areas on most platforms.
						</p>
						<h5>Size </h5>
						<ol>
							<li>Small</li>
							<li>Medium</li>
							<li>Large</li>
							<li>Extra Large</li>
						</ol>
					</div>
				</div>
				<!-- like product -->
				<div class="container">
					<h3 class="text-center">You Also Like These Product</h3>
					<div class="row">
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
					</div>
				</div>
				<!-- end like product -->
			</div>
			<!--############# detail Show Section End ##################-->
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