
  <div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li class="ml-3 active">Insert Categories</li>
        </ul>
  </div>
  <!-- ********* start insert categories form ********* -->
   <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Insert Categories</h2>
          </div>
        <div class="card-body">
        	<form method="POST">
		  		<div class="form-group">
		  			<label>Categories Title :</label>
		  			<input type="text" name="cat_title" required class="form-control">
		  		</div>
		  		<div class="form-group">
		  			<label>Categories Description :</label>
		  			<input type="text" name="cat_desc" required class="form-control">
		  		</div>
		  		<input type="submit" name="insert_cat" class="btn btn-block btn-primary" >
		  	</form>
        </div>
         
        </div>
      </div>
    </div>
  </div>
  
  	<?php
  		if (isset($_POST['insert_cat'])) {
  			$cat_title = $_POST['cat_title'];
  			$cat_desc = $_POST['cat_desc'];

  			$run = $conn->query("INSERT INTO categories (cat_title , cat_desc) VALUES ('$cat_title','$cat_desc')");
  			if ($run) {
		        echo "<script>alert('Categories Inserted Successfully')</script>";
		        echo "<script >window.open('main.php?view_categories','_self')</script>";
		    }											
  		}
  	?>
  </div>