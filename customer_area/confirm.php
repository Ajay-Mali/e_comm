<!DOCTYPE html>
<html>
    <head>
        <title>E commerce Store</title>
        <?php include('includes/csslinks.php') ?>
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
                            <a href="../index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="../shop.php" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="my_account.php" class="nav-link">My Account</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="../card.php" class="nav-link">Shopping card</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="../about.php" class="nav-link">About us</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="../services.php" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="../contactus.php" class="nav-link">Contact us</a>
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
                    <li><a href="../index.php" class="breadcrumb-item">Home</a></li>
                    <li class="ml-3 active">My Account</li>
                </ul>   
            </div>
        </div>
    </div>
<!--######################################### short nav End  ######################################-->
<!--######################################### Main section start  ######################################-->
    
    <div class="container-fluid">
        <div class="row">
            <!-- col-1 -->
            <div class="col-sm-3 mb-2">
                <?php include("includes/sidebar.php"); ?>
            </div>
            <!-- col-2 -->
            <div class="col-sm-9">
               <div class="container">
               		<div class="card">
               			<div class="card-header">
               				<h1 class="text-center">Please Confirm Your Payment</h1>
               			</div>
               			<div class="card-body">
               				<form enctype="multipart/form-data">
			                    <div class="form-group ">
			                        <label class="">Invoice Number :</label>
			                        <input type="text" name="" class="form-control">
			                    </div>
			                    <div class="form-group">
			                        <label class="">Ammount :</label>
			                        <input type="text" name="" class="form-control">
			                    </div>
			                     <div class="form-group">
			                        <label class="">Select Payment Mode :</label>
			                        <select class="form-control">
			                        	<option>Bank Transfer</option>
			                        	<option>PayPal</option>
			                        	<option>PayuMoney</option>
			                        	<option>Paytm</option>
			                        </select>
			                    </div>
			                    <div class="form-group">
			                        <label class="">Transection Number :</label>
			                        <input type="text" name="" class="form-control">
			                    </div>
			                    <div class="form-group">
			                        <label class="">Payment Date :</label>
			                        <input type="date" name="" class="form-control">
			                    </div>
			                    <center>
			                        <button type="submit" class="btn btn-primary mt-2">
			                            <i class="fa fa-user mr-1"></i> Confirm Payment
			                        </button>
			                    </center>
			                </form>
               			</div>

               		</div>
               </div>
            </div>
        </div>
    </div>

<!--######################################### Main Section End ######################################-->

<!--######################################### footer Start  ######################################-->
<?php include("includes/footer.php") ?>
<!--######################################### footer end ######################################-->

<!--######################################### Js links  ######################################### -->
       <?php include("includes/jslinks.php"); ?>
   
       <script type="text/javascript">
           // $('.carousel').carousel()
       </script>
    </body>
</html>