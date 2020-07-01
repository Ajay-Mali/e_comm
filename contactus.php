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
                            <a href="contactus.php" class="nav-link active">Contact us</a>
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

<!--######################################### Main Section Start ######################################-->
    <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                <h2 class="">Contact Us</h2>
                <p class="text-muted">if you have any questions please feel free to contact us. Our customer service center is working for you 7/24 </p>
            </div>
            <div class="card-body p-5">
                <form method="POST">
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Name :</label>
                        <input type="text" name="name" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Email :</label>
                        <input type="email" name="email" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Subject :</label>
                        <input type="text" name="subject" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Message :</label>
                        <textarea class="form-control col-md-9" name="mess" ></textarea>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary mt-2" name="submit">
                            <i class="fa fa-user-md"></i> Send Message
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['submit'])) {
            // admin email
            $s_name = $_POST['name'];
            $s_email = $_POST['email'];
            $s_subject = $_POST['subject'];
            $s_mess = $_POST['mess'];
            $r_email = 'ajmaking02016@gmail.com';

            mail( $r_email,$s_name,$s_subject,$s_mess,$s_email);

            //customer email
            $s_email = $_POST['email'];
            $r_subject = "Welcome To Our Website ";
            $r_mess = "I Shall Get you soon, Thanks for sending email";

            mail( $s_email, $r_subject, $r_mess, $r_email);

            echo "<h2 align = 'center'>Your E-mail Sent..</h2>";
           }
    ?>
<!--######################################### Main Section End  ######################################-->

<!--######################################### footer Start  ######################################-->
<?php include("includes/footer.php"); ?>
<!--######################################### footer end ######################################-->

<!--######################################### Js links  ######################################### -->
     <?php include("includes/jslinks.php"); ?>
</body>
</html>