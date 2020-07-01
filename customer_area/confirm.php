<!DOCTYPE html>
<html>
    <head>
        <title>E commerce Store</title>
        <?php include('includes/csslinks.php') ?>
        <?php 
          if (!isset($_SESSION['customer_email'])) {
            echo "<script>window.open('../checkout.php','_self')</script>";
          }else{
             // if (isset($_GET['o_id'])) {
              $o_id = $_GET['o_id'];
              $run_order = $conn->query("SELECT * FROM customer_order WHERE order_id = '$o_id'");
              $row_o = $run_order->fetch_assoc();
        ?>
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
                    <i class="fa fa-shopping-cart"></i>  <span><?php item(); ?> Items In Card</span>
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
               				<form action="confirm.php?update_id=<?php echo $o_id ?>" method="POST" enctype="multipart/form-data">
			                    <div class="form-group ">
			                        <label class="">Invoice Number :</label>
			                        <input type="text" name="invoice_no" value="<?php echo $row_o['invoice_no'] ?>" class="form-control" readonly="" >
			                    </div>
			                    <div class="form-group">
			                        <label class="">Amount :</label>
			                        <input type="text" name="amount" value="<?php echo $row_o['due_amount'] ?>"  class="form-control" readonly="readonly">
			                    </div>
			                     <div class="form-group">
			                        <label class="">Select Payment Mode :</label>
			                        <select class="form-control" name="pay_type" required="">
			                        	<option value="bank_tra">Bank Transfer</option>
			                        	<option value="paypal">PayPal</option>
			                        	<option value="payumoney">PayuMoney</option>
			                        	<option value="paytm">Paytm</option>
			                        </select>
			                    </div>
			                    <div class="form-group">
			                        <label class="">Transection Number :</label>
			                        <input type="text" name="tra_no" class="form-control" required="">
			                    </div>
			                    <div class="form-group">
			                        <label class="">Payment Date :</label>
			                        <input type="date" name="pay_date" class="form-control" required="">
			                    </div>
			                    <center>
			                        <button type="submit" name="pay" class="btn btn-primary mt-2">
			                            <i class="fa fa-user mr-1"></i> Confirm Payment
			                        </button>
			                    </center>
			                </form>
               			</div>
                    <?php

                      if (isset($_POST['pay'])) {
                        $up_c_id = $_GET['update_id'];
                        $invoice_no = $_POST['invoice_no'];
                        $amount = $_POST['amount'];
                        $pay_type = $_POST['pay_type'];
                        $tra_no = $_POST['tra_no'];
                        $pay_date = $_POST['pay_date'];
                        $complete = "complete";

                        $run1 = $conn->query("INSERT INTO payments (`invoice_no`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES ('$invoice_no','$amount','$pay_type','$tra_no','$pay_date')");

                        $run2 = $conn->query("UPDATE customer_order SET order_status = '$complete' WHERE order_id = '$up_c_id'");

                        echo "<script>alert('Your Order has Been Received...')</script>";
                        echo "<script>window.open('my_account.php?my_order','_self')</script>";

                      }
                    ?>
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
<?php }
// }else{
//       echo "<script>window.open('my_account.php?my_order','_self')</script>";
//     }
//   } 
?>