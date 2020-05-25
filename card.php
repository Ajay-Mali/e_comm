<!DOCTYPE html>
<html>
<head>
	<title>E commerce Store</title>
	<?php include('includes/csslinks.php'); ?>
    <style type="text/css">
        #showcards table tr td img{
            width: 100px;
            
        }
    </style>
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
                            <a href="shop.php" class="nav-link ">Shop</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="checkout" class="nav-link">My Account</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="card.php" class="nav-link active">Shopping card</a>
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
					<li class="ml-3 active">Card</li>
				</ul>	
			</div>
		</div>
	</div>
<!--######################################### short nav End  ######################################-->


<!--######################################### Main Section start  ######################################-->
    
    <div class="container bg-white">
        <div class="row pt-2">
            <!-- col-1 -->
            <div class="col-md-9">
                <div id="showcards" class="card border-0 p-3">
                    <form>
                        <h1>Shopping Cards</h1>
                        <p class="text-muted">Currently you have 4 item`s in your card</p>

                        <table class="table table-responsive">
                            <thead >
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price </th>
                                    <th>Size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="1">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="img/1.jpg" ></td>
                                    <td>White Polo Shirt</td>
                                    <td>2</td>
                                    <td>INR 199</td>
                                    <td>Small</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>INR 398</td>
                                </tr>
                                <tr>
                                    <td><img src="img/1.jpg" ></td>
                                    <td>White Polo Shirt height:t height:</td>
                                    <td>2</td>
                                    <td>INR 199</td>
                                    <td>Small</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>INR 398</td>
                                </tr>
                                <tr>
                                    <td><img src="img/1.jpg" ></td>
                                    <td>White Polo Shirt</td>
                                    <td>2</td>
                                    <td>INR 199</td>
                                    <td>Small</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>INR 398</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">Total</td>
                                    <td colspan="2">INR 1000</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="card-footer border-0 p-0">
                            <div class="float-left">
                                <a href="index.php" class="btn btn-light">
                                    <i class="fa fa-chevron-left mr-1"></i>Continue Shopping
                                </a>
                            </div>
                            <div class="float-right">
                                <button class="btn btn-light" type="submit" name="update">
                                    <i class="fa fa-refresh mr-1"></i>Update Card
                                </button>
                                <a href="index.php" class="btn btn-primary">
                                    <i class="fa fa-chevron-right mr-1"></i>Proceed To Checkout
                                </a>
                            </div>
                        </div>
                    </form>

                    <!-- like product -->
                <div class="container-fluid mt-5">
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
            </div>
            <!-- col-2 -->
            <div class="col-md-3 pt-md-5">
                <div class="card mt-md-5 mb-2">
                    <div class="card-header w-100">
                        <h3 class="text-center">Order Summary</h3>
                    </div>
                    <p class="text-muted m-2 text-justify">
                        Shipping and addtional costs are calculated based on the values you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <th>INR 199</th>
                                </tr>
                                <tr>
                                    <td>Shopping and Handling</td>
                                    <th>INR 0</th>
                                </tr>
                                <tr>
                                    <td>Tex</td>
                                    <th>INR 0</th>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td>Order Total</td>
                                    <th>INR 199</th>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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