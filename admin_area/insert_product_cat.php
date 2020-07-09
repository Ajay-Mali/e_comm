
  <div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li class="ml-3 active">Insert Product Categories</li>
        </ul>
  </div>
  <!-- ********* start insert product categories form ********* -->
   <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Insert Product Categories</h2>
          </div>
        <div class="card-body">
        	<form method="POST">
		  		<div class="form-group">
		  			<label>Product Categories Title :</label>
		  			<input type="text" name="p_cat_title" required class="form-control">
		  		</div>
		  		<div class="form-group">
		  			<label>Product Categories Description :</label>
		  			<input type="text" name="p_cat_desc" required class="form-control">
		  		</div>
		  		<input type="submit" name="insert_pro_cat" class="btn btn-block btn-primary" >
		  	</form>
        </div>
         
        </div>
      </div>
    </div>
  </div>
  
  	<?php
  		if (isset($_POST['insert_pro_cat'])) {
  			$p_cat_title = $_POST['p_cat_title'];
  			$p_cat_desc = $_POST['p_cat_desc'];

  			$run = $conn->query("INSERT INTO product_categories (p_cat_title , p_cat_desc) VALUES ('$p_cat_title','$p_cat_desc')");
  			if ($run) {
		        echo "<script>alert('Product Categories Inserted Successfully')</script>";
		        echo "<script >window.open('main.php?view_product_cat','_self')</script>";
		    }											
  		}
  	?>
  </div>