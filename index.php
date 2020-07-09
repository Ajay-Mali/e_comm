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
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item"> 
                            <a href="shop.php" class="nav-link">Shop</a>
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

<!--######################################### Slider Start  ######################################-->
        <div class="container mt-2">
            <div class="carousel slide carousel-fade shadow" data-ride="carousel" id="myslider">
                 <ol class="carousel-indicators">
                     <li data-target="#myslider" data-slide-to="0" class="active"></li>
                     <li data-target="#myslider" data-slide-to="1"></li>
                     <li data-target="#myslider" data-slide-to="2"></li>
                     <li data-target="#myslider" data-slide-to="3"></li>
                 </ol>
                  <div class="carousel-inner">
                    <?php
                      $get_slider = "SELECT * FROM slider LIMIT 0,1";
                      $run_slider= mysqli_query($conn,$get_slider);
                      while ($row = mysqli_fetch_array($run_slider)) {
                        $imgs = $row['slider_img'];
                        echo ' <div class="carousel-item active">
                         <img src="admin_area/slider_img/'.$imgs.'" >
                     </div>' ;
                      }
                     ?>
                     <?php
                      $get_slider = "SELECT * FROM slider LIMIT 1,6";
                      $run_slider= mysqli_query($conn,$get_slider);
                      while ($row = mysqli_fetch_array($run_slider)) {
                        $imgs = $row['slider_img'];
                        echo '<div class="carousel-item">
                         <img src="admin_area/slider_img/'.$imgs.'" >
                     </div>';
                      }
                     ?>
                  
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
        </div>
        
<!--######################################### Slider End  ######################################-->

<!--############################### Featured box Start  ######################################-->
    <div class="container my-3" id="Featured">
        <div class="row">
            
            <!-- card 1 -->
            <div class="col-md-4 my-2">
                <div class="card shadow">
                   <div class="card-body text-center">
                        <h3 class="card-title text-uppercase text-primary">
                             Best Prices
                        </h3>
                        <h5 class="card-text">
                            You can check on all 
                        </h5>
                   </div>
                </div>
            </div>

             <!-- card 2 -->
            <div class="col-md-4 my-2">
                <div class="card shadow">
                   <div class="card-body text-center">
                        <h3 class="card-title text-primary text-uppercase">
                            100% Satisfaction Guaranteed From Us
                        </h3>
                        <h5 class="card-text">
                            Free returns on everything for 3 months.
                        </h5>
                   </div>
                </div>
            </div>

             <!-- card 3 -->
            <div class="col-md-4 my-2">
                <div class="card shadow">
                   <div class="card-body text-center">
                        <h3 class="card-title text-primary text-uppercase">
                            We Love Our Customers
                        </h3>
                        <h5 class="card-text">
                          We are known to provide best possible service ever
                        </h5>
                   </div>
                </div>
            </div>

        </div>
    </div>
<!--######################################### Featured box End  ######################################-->

<!--######################################### hot box Start  ######################################-->
    <div class="container-fluid text-center my-3">
        <h3 class="text-uppercase">Latest This Week</h3>
    </div>
    <div class="container" id="hotbox">
        <div class="row">
          <?php
            getPro();
          ?>
        </div>
    </div>
<!--######################################### hot box End  ######################################-->


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