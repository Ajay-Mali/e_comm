<?php #require_once('includes/db.php');
      require_once('functions/functions.php');
 ?>
 <?php
				if(isset($_GET['pro_id']))
				{	
					$pro_id = $_GET['pro_id'];
					$get_pro = "SELECT * FROM products WHERE product_id = '$pro_id'";
					$run = $conn->query($get_pro);
					$row = $run->fetch_array();
					$product_title=$row['product_title'];
				    $p_cat_id=$row['p_cat_id'];
				    $cat_id=$row['cat_id'];
				    $product_price=$row['product_price'];
				    $product_desc=$row['product_desc'];
				    $img1 =$row['product_img1'];
				    $img2 =$row['product_img2'];
				    $img3 =$row['product_img3'];
				    $get_pcat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
				    $run1 = $conn->query($get_pcat);
				    $row1 = $run1->fetch_array();
				    $p_cat_id=$row1['p_cat_id'];
				    $p_cat_title=$row1['p_cat_title'];
				}
				else{
					// if($_GET['pro_id'] == ''){
					// 	header("location:shop.php");
					// }
					//echo"<script>window.open(,'_self')</script>";

						// $pro_id = $_GET['pro_id'];
						// echo"<script>window.open('details.php?pro_id=$pro_id','_self')</script>";
				
				}
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
					<li class="ml-3 "><a href="shop.php" class="breadcrumb-item">Shop</a></li>
					<li class="ml-3 active"><?php echo $p_cat_title; ?></li>
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
				                         <img src='admin_area/product_img/<?php echo$img1?>' class='img-fluid card-img-top'>
				                     </div>
				                      <!-- 2nd slider -->
				                     <div class="carousel-item">
				                        <img src='admin_area/product_img/<?php echo$img2?>' class='img-fluid card-img-top'>
				                     </div>
				                      <!-- 3th slider -->
				                     <div class="carousel-item">
				                         <img src='admin_area/product_img/<?php echo$img3?>' class='img-fluid card-img-top'>
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
						 		<?php  addCard(); ?>
						 		<!-- card title -->
						 		<div class="text-center"><h2><?php echo $product_title; ?></h2></div>
						 		<!-- form -->
						 		<form class="p-2" method="POST" action="details.php?add_card=<?php echo $pro_id; ?>">
						 				<div class="form-group">
						 					<div class="row">
							 					<label class="col-sm-4">Product Quantity :</label>
							 					<select class="form-control col-sm-7" required="required" name="qty">
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
							 					<select class="form-control col-sm-7" required="required" name="size">
												    <option>Small</option>
												    <option>Medium</option>
												    <option>Large</option>
												    <option>Extra Large</option>
												</select>
						 					</div>
						 				</div>

						 				<div class="text-center">
						 					<!-- <input type="hidden" name="pro_price" value="<?php echo $product_price; ?>"> -->
											<h2 >INR <?php echo $product_price; ?></h2><br>
											<button class="btn btn-primary btn-sm" type="submit">
												<i class="fa fa-shopping-cart mr-2"></i> Add To Card
											</button>
										</div>
						 		</form>
								
								<div class="row mt-2 p-2">
									<div class="col-sm-4 mt-md-0 mt-2">
										 <img src='admin_area/product_img/<?php echo$img1?>' class='img-fluid card-img-top'>
									</div>
									<div class="col-sm-4 mt-md-0 mt-2">
										 <img src='admin_area/product_img/<?php echo$img2?>' class='img-fluid card-img-top'>
									</div>
									<div class="col-sm-4 mt-md-0 mt-2">
										 <img src='admin_area/product_img/<?php echo$img3?>' class='img-fluid card-img-top'>
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
						<p class="text-justify">
							<?php echo $product_desc; ?>
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
						<?php 
							$like_pro = "SELECT * FROM products WHERE p_cat_id = '$p_cat_id' ORDER BY 1 DESC LIMIT 0,4";
							$run2 = $conn->query($like_pro);
							while ($row2 = $run2->fetch_array()) {
								$pro_id = $row2['product_id'];
								$pro_title = $row2['product_title'];
								$pro_price = $row2['product_price'];
								$pro_img1 = $row2['product_img1'];
								echo "<div class='col-md-3 col-sm-6 my-1'>
						                <div class='card'>
						                    <img src='admin_area/product_img/$pro_img1' class='img-fluid card-img-top'>
						                    <div class='card-body text-center'>
						                        <h5 class=card-title ><a href='details.php?pro_id=$pro_id'>$pro_title</a></h5>
						                        <p class='card-text'>INR $pro_price </p>
						                        <p class='btn-group'>
						                          <a href='details.php?pro_id=$pro_id' class='btn btn-outline-secondary btn-sm'>View Details</a>  
						                          <a href='details.php?pro_id=$pro_id' class='btn btn-outline-primary btn-sm'><i class='fa fa-shopping-cart mr-2'></i>Add to card</a>
						                        </p>
						                    </div>
						                </div>
						            </div>";
								}
						?>
						
				         
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