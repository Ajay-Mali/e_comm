
<?php require_once('includes/db.php');
      require_once('functions/functions.php');
 ?>
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
                    <form action="card.php" method="post" enctype="multipart-form-data">
                        <h1>Shopping Cards</h1>
                        <p class="text-muted">Currently you have <?php item(); ?> item`s in your card</p>

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
                                <?php 
                                    $ip_add = getUserIp();
                                    $total = 0;
                                    $sql_price = "SELECT * FROM card WHERE ip_add = '$ip_add'";
                                    $run_price = $conn->query($sql_price);
                                    while ($row_price = $run_price->fetch_array()) {
                                        $pro_id = $row_price['p_id'];
                                        $pro_qty = $row_price['qty'];
                                        $pro_size = $row_price['size'];
                                        $get_price = "SELECT * FROM products WHERE product_id = '$pro_id'";
                                        $run_price1 = $conn->query($get_price);
                                        while ($row_price1 = $run_price1->fetch_array()) {
                                            $pro_img = $row_price1['product_img1'];
                                            $pro_title = $row_price1['product_title'];
                                            $pro_price =$row_price1['product_price'];
                                            $subtotal = $pro_price * $pro_qty;
                                            $total += $subtotal;
                                            echo " <tr>
                                                    <td><img src='admin_area/product_img/$pro_img' ></td>
                                                    <td>{$pro_title}</td>
                                                    <td>$pro_qty</td>
                                                    <td>INR $pro_price</td>
                                                    <td>$pro_size</td>
                                                    <td><input type='checkbox' name='remove[]' value = '$pro_id'></td>
                                                    <td>INR $subtotal</td>
                                                </tr>";
                                        }  
                                   }
                                ?>          
                            </tbody>
                            <tfoot>

                                <tr>
                                    <td colspan="6">Total</td>
                                    <td colspan="2">INR <?php echo "$total";  ?></td>
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
                                <a href="checkout.php" class="btn btn-primary">
                                    <i class="fa fa-chevron-right mr-1"></i>Proceed To Checkout
                                </a>
                            </div>
                        </div>
                    </form>

                    <?php 

                        // $conn = mysqli_connect('localhost','root','','ecom');
                        // global $conn;
                        function update_card(){
                            if (isset($_POST['update'])) {
                                foreach ($_POST['remove'] as $remove_id) {
                                    $id = $remove_id;
                                  $del_pro = "DELETE FROM 'card' WHERE p_id = '$id' ";
                                    echo "<script>alert('$remove_id')</script>"; 
                                 $run_del = mysqli_query($conn,$del_pro);   
                                    echo "<script>alert('$run_del')</script>"; 
                                  if ($run_del) {
                                     echo "<script>alert('$remove_id')</script>"; 
                                     echo "<script>window.open('card.php','_self')</script>";

                                  }else{
                                     echo "<script>alert('$remove_id')</script>"; 
                                     echo "<script>alert('check query')</script>"; 
                                  }
                                }
                            }
                        }

                        echo @$upcard = update_card();
                    ?>
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
                                    <th>INR <?php echo "$total"; ?></th>
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
                                    <th>INR <?php echo "$total"; ?></th>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--######################################### Main Section End  ######################################-->
  <!-- like product -->
                <div class="container mt-5">
                    <h3 class="text-center">You Also Like These Product</h3>
                    <div class="row">
                    <?php 
                    $sql = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,4";
                        $run = $conn->query($sql);
                        while ($row = $run->fetch_array()) {
                            $pro_id = $row['product_id'];
                            $pro_title = $row['product_title'];
                            $pro_price = $row['product_price'];
                            $pro_img1 = $row['product_img1'];
                            //echo $pro_id . "<br>";
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
                    
                <!-- end like product -->
                </div>
            </div>  
<!--######################################### footer Start  ######################################-->
<?php include("includes/footer.php"); ?>
<!--######################################### footer end ######################################-->

<!--######################################### Js links  ######################################### -->
     <?php include("includes/jslinks.php"); ?>
</body>
</html>