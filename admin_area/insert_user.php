
<!--######################################### Short nav Start  ######################################-->
	<ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
    <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
    <li class="ml-3 active">Insert User Profile</li>
</ul>
<!--######################################### short nav End  ######################################-->

<!--######################################### Main Section start  ######################################-->

     <div class="container">
        <div class="row">
        	<div class="offset-md-2 col-md-8">
        		<div class="card mt-3">
            <div class="card-header text-center">
                <h2 class="">User Registration</h2>
            </div>
            <div class="card-body p-5">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1"> Name :</label>
                        <input type="text" name="u_name" class="form-control col-md-9" required="required">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1"> Email :</label>
                        <input  required="required" type="email" name="u_email" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1"> Password :</label>
                        <input  required="required" type="Password" name="u_pass" class="form-control col-md-9">
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Country :</label>
                        <input  required="required" type="text" name="u_country" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Contact Number :</label>
                        <input  required="required" type="text" name="u_contact" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Address :</label>
                        <input  required="required" type="text" name="u_address" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Job :</label>
                        <input  required="required" type="text" name="u_job" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1">User About :</label>
                        <input  required="required" type="text" name="u_about" class="form-control col-md-9">
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2 offset-md-1">Image :</label>
                        <input  required="required" type="file" name="u_img" class="form-control-file col-md-9">
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
        </div>
    </div>
    <!-- php code start -->
    <?php 
        if (isset($_POST['submit'])) {
             
           $u_name = $_POST['u_name'];
           $u_email = $_POST['u_email'];
           $u_pass = $_POST['u_pass'];
           $u_country = $_POST['u_country'];
           $u_job = $_POST['u_job'];
           $u_contact = $_POST['u_contact'];
           $u_address = $_POST['u_address'];
           $u_about = $_POST['u_about'];
           $u_img = $_FILES['u_img']['name'];
           $u_temp_img = $_FILES['u_img']['tmp_name'];
          
           move_uploaded_file($u_temp_img,"admin_img/$u_img");

        
           if ($conn->query("INSERT INTO `admins`(`admin_name`, `admin_email`, `admin_pass`, `admin_img`, `admin_contact`, `admin_country`, `admin_add`, `admin_job`, `admin_about`) VALUES ('$u_name','$u_email','$u_pass','$u_img','$u_contact','$u_country','$u_address','$u_job','$u_about')")) {
      
                echo "<script>alert('data inserted successfully')</script>";
                echo "<script>window.open('main.php?dashboard','_self')</script>";
           }else{
                   echo "<script>alert('check query')</script>";
           }
        }
    ?>
  