<?php 
    
    require_once('includes/db.php');
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
                            <a href="index.php" class="nav-link active">Home</a>
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
					<li class="ml-3 active">Registration</li>
				</ul>	
			</div>
		</div>
	</div>
<!--######################################### short nav End  ######################################-->

<!--######################################### Main Section start  ######################################-->

     <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                <h2 class="">Customer Registration</h2>
            </div>
            <div class="card-body p-5">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Customer Name :</label>
                        <input type="text" name="c_name" class="form-control col-md-9" required="required">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Customer Email :</label>
                        <input  required="required" type="email" name="c_email" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Customer Password :</label>
                        <input  required="required" type="Password" name="c_pass" class="form-control col-md-9">
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Country :</label>
                        <input  required="required" type="text" name="c_country" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">City :</label>
                        <input  required="required" type="text" name="c_city" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Contact Number :</label>
                        <input  required="required" type="text" name="c_contact" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Address :</label>
                        <input  required="required" type="text" name="c_address" class="form-control col-md-9">
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Image :</label>
                        <input  required="required" type="file" name="c_img" class="form-control-file col-md-9">
                    </div>
                    <center>
                        <button type="submit" name="submit" class="btn btn-primary mt-2">
                            <i class="fa fa-user mr-1"></i> Register
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <!-- php code start -->
    <?php 
        if (isset($_POST['submit'])) {
             echo "<script>alert('ok')</script>";
           $c_name = $_POST['c_name'];
           $c_email = $_POST['c_email'];
           $c_pass = $_POST['c_pass'];
           $c_country = $_POST['c_country'];
           $c_city = $_POST['c_city'];
           $c_contact = $_POST['c_contact'];
           $c_address = $_POST['c_address'];
           $c_img = $_FILES['c_img']['name'];
           $c_temp_img = $_FILES['c_img']['tmp_name'];
           $c_ip = getUserIp();
             
           move_uploaded_file($c_temp_img,"customer_area/customer_img/$c_img");

           // $insert = "INSERT INTO customers (customer_name , customer_email , customer_pass , customer_country , customer_city , customer_contact , customer_address , customer_img , customer_ip) VALUES ('$c_name' , '$c_email' , '$c_pass' , '$c_country' , '$c_city' , '$c_contact' , '$c_address' , '$c_img' , '$c_ip') ";
           $insert = " INSERT INTO `customers`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_img`, `customer_ip`) VALUES ('$c_name' , '$c_email' , '$c_pass' , '$c_country' , '$c_city' , '$c_contact' , '$c_address' , '$c_img' , '$c_ip')";
           mysqli_query($conn , $insert);
           $sql = "SELECT * FROM card WHERE ip_add = '$c_ip'";
           $run_card = $conn->query($sql);
           $check = mysqli_num_rows($run_card);
           if ($check > 0) {
                $_SESSION['customer_email'] = $c_email;
                $_SESSION['customer_name'] = $c_name;
                 echo "<script>alert('data inserted successfully')</script>";
              //  echo "<script>alert('you are already register ...')</script>";
                //header('location:checkout.php');
                  echo "<script>window.open('checkout.php','_self')</script>";
           }else{
                  $_SESSION['customer_email'] = $c_email;
                  $_SESSION['customer_name'] = $c_name;
                echo "<script>alert('data inserted successfully')</script>";
               //  header('location:index.php');
                echo "<script>window.open('index.php','_self')</script>";
           }
        }
    ?>
    <!-- end php code -->
<!--######################################### Main Section End  ######################################-->

<!--######################################### footer Start  ######################################-->
<?php include("includes/footer.php"); ?>
<!--######################################### footer end ######################################-->

<!--######################################### Js links  ######################################### -->
     <?php include("includes/jslinks.php"); ?>
</body>
</html>