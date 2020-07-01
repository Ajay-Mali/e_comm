<?php 
    require_once('../includes/db.php');
    $s_email = $_SESSION['customer_email'];
    $run = $conn->query("SELECT * FROM customers WHERE customer_email = '$s_email'");
    $row = $run->fetch_assoc();
 ?>
  <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                <h2 class="">Edit Account</h2>
            </div>
            <div class="card-body p-5">
                <form action="edit_account.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Customer Name :</label>
                        <input required="" type="text" name="c_name" value="<?php echo $row['customer_name'] ?>" class="form-control col-md-9">
                        <input type="hidden" name="c_id" value="<?php echo $row['customer_id']?>">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Customer Email :</label>
                        <input required="" type="email" name="c_email" value="<?php echo $row['customer_email'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Customer Password :</label>
                        <input required="" type="password" name="c_pass" value="<?php echo $row['customer_pass'] ?>" class="form-control col-md-9">
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Country :</label>
                        <input required="" type="text" name="c_country" value="<?php echo $row['customer_country'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">City :</label>
                        <input required="" type="text" name="c_city" value="<?php echo $row['customer_city'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Contact Number :</label>
                        <input required="" type="text" name="c_contact" value="<?php echo $row['customer_contact'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Address :</label>
                        <input required="" type="text" name="c_address" value="<?php echo $row['customer_address'] ?>" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Image :</label>
                       <input  required="required" type="file" name="c_img" class="form-control-file col-md-9">
                    </div>
                    <div class="h-25 w-25 ml-md-5">
                     <img src="customer_img/<?php echo $row['customer_img'] ?>" class="img-fluid ml-md-4" width="100%" height="100%">	
                    </div>
                    <center>
                        <button type="submit" name="update" class="btn btn-primary mt-2">
                            <i class="fa fa-user mr-1"></i> Update Now
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>


    <?php 
        if(isset($_POST['update'])) {
               $c_id = $_POST['c_id'];
               $c_name = $_POST['c_name'];
               $c_email = $_POST['c_email'];
               $c_pass = $_POST['c_pass'];
               $c_country = $_POST['c_country'];
               $c_city = $_POST['c_city'];
               $c_contact = $_POST['c_contact'];
               $c_address = $_POST['c_address'];
               $c_img = $_FILES['c_img']['name'];
               $c_temp_img = $_FILES['c_img']['tmp_name'];
              //echo "<script>alert($c_img)</script>";

               move_uploaded_file($c_temp_img,'customer_area/customer_img/$c_img');
               //move_uploaded_file($c_temp_img,"customer_area/customer_img/$c_img");

               $r = $conn->query("UPDATE customers SET customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_img='$c_img' WHERE customer_id = '$c_id'");
               if($r) {
                    
                    echo "<script>alert('Your successfully')</script>";
                    echo "<script>window.open('../index.php','_self')</script>";
               }
        }


    ?>