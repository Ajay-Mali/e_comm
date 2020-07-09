<?php
  if (isset($_GET['edit_product_cat'])) {
    $id = $_GET['edit_product_cat'];
   
    $run = $conn->query("SELECT * FROM product_categories WHERE p_cat_id='$id'");
    $row = $run->fetch_assoc();
    $Title = $row['p_cat_title'];
    $desc = $row['p_cat_desc'];
    ?>
   
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?view_product_cat" class="breadcrumb-item ml-3">View Product Cat</a></li>
          <li class="ml-3 active">Update Product Categories</li>
        </ul>

  <!-- ********* start insert product categories form ********* -->
   <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Update Product Categories</h2>
          </div>
            <div class="card-body">
              <form method="POST">
              <div class="form-group">
                <label>Product Categories Title :</label>
                <input type="text" name="p_cat_title" required="required" class="form-control" value="<?php echo $Title ?>" >
              </div>
              <div class="form-group">
                <label>Product Categories Description :</label>
                <input type="text" name="p_cat_desc" required="required" class="form-control" value="<?php echo $desc ?>" >
              </div>
              <input type="submit" name="update_pro_cat" class="btn btn-block btn-primary" >
            </form>
            </div>
         
        </div>
      </div>
    </div>
  </div>
  
    <?php
      if (isset($_POST['update_pro_cat'])) {
        $id = $_GET['edit_product_cat'];
        $p_cat_title = $_POST['p_cat_title'];
        $p_cat_desc = $_POST['p_cat_desc'];

        $run = $conn->query("UPDATE product_categories SET p_cat_title ='$p_cat_title' , p_cat_desc = '$p_cat_desc' WHERE p_cat_id = '$id'");
        if ($run) {
            echo "<script>alert('Product Categories Updated Successfully')</script>";
            echo "<script >window.open('main.php?view_product_cat','_self')</script>";
        }                     
      }
    ?>
  </div>
 <?php }else{
   echo "<script >window.open('main.php?view_product_cat','_self')</script>";
 }

?>