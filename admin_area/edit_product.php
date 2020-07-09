<?php require_once("../includes/db.php") ?>
  <div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?view_product" class="breadcrumb-item ml-3"> View Product</a></li>
          <li class="ml-3 active">Update Product</li>
        </ul>
  </div>
  <!-- ********* start insert product form ********* -->
  <?php
  	if (isset($_GET['edit_product'])) {
  		$id = $_GET['edit_product'];
  		$run_pro = $conn->query("SELECT * FROM products WHERE product_id='$id'");
  		$row_pro = $run_pro->fetch_assoc();
  	
  	
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Update Product</h2>
          </div>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Title</label>
            <input type="text" name="product_title" class="form-control" value="<?php echo $row_pro['product_title'] ?>"  required="required">
           </div>
          
          <div class="form-row">
            <div class="col-md-6">
               <!-- pro Categories -->
                 <div class="form-group">
                  <label class="h4">Product Categories</label>
                  <select class="form-control"  required="required" name="product_cat">
                    <?php

                    $c_id = $row_pro['p_cat_id'];
                    $show = $conn->query("SELECT * FROM product_categories WHERE p_cat_id='$c_id'");
                    $showdata = $show->fetch_assoc();
                    $id = $showdata['p_cat_id'];
                    $title = $showdata['p_cat_title'];
                    echo '<option value='.$id.'>'.$title.'</option>';
                    $set_p_cat = $conn->query("SELECT * FROM product_categories");
                    while ($row = mysqli_fetch_array($set_p_cat)) {
                      	if ($row_pro['p_cat_id'] == $row['p_cat_id']) {
                      		continue;
                      	}
                      	$id = $row['p_cat_id'];
                       	$title = $row['p_cat_title'];
						echo '<option value='.$id.'>'.$title.'</option>';
                        
                      }
                    ?>
                  </select>
                 </div>
            </div>
            <div class="col-md-6">
              <!--  Categories -->
               <div class="form-group">
                <label class="h4">Categories</label>
                <select class="form-control"  required="required" name="cat">
                  <?php
                  	$cat = $row_pro['cat_id'];
                  	$show = $conn->query("SELECT * FROM categories WHERE cat_id = '$cat'");
                  	$row_cat= $show->fetch_assoc();
                  	$id = $row_cat['cat_id'];
                    $title = $row_cat['cat_title'];
					echo '<option value='.$id.'>'.$title.'</option>';
                    $set_cat = $conn->query("SELECT * FROM categories");
                     while ($row = mysqli_fetch_array($set_cat)) {
                      	if ($row_pro['cat_id'] == $row['cat_id']) {
                      		continue;
                      	}else{
                      		$id = $row['cat_id'];
                       		$title = $row['cat_title'];
							echo '<option value='.$id.'>'.$title.'</option>';
                      	}
                        
                      }
                    ?>
                </select>
               </div>
            </div>
          </div>
         
          
          
          
          <div class="form-row">
            <div class="col-md-4">
               <!-- pro img1 -->
               <div class="form-group">
                <label class="h4">Product Image 1</label>
                <input type="file" name="product_img1" class="form-control p-1"  required="required">
               </div>
               <img src="product_img/<?php echo $row_pro['product_img1']?>" class='img-fluid'>
            </div>
            <div class="col-md-4">
                  <!-- pro img2 -->
                 <div class="form-group">
                  <label class="h4">Product Image 2</label>
                  <input type="file" name="product_img2" class="form-control p-1"  required="required">
                 </div>
                 <img src="product_img/<?php echo $row_pro['product_img2']?>" class='img-fluid'>
            </div>
            <div class="col-md-4">
                <!-- pro img 3 -->
                 <div class="form-group">
                  <label class="h4">Product Image 3</label>
                  <input type="file" name="product_img3" class="form-control p-1"  required="required">
                 </div>
				<img src="product_img/<?php echo $row_pro['product_img3']?>" class='img-fluid'>
            </div>
          </div>
         

          

          
          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Price</label>
            <input type="text" name="product_price" class="form-control" value="<?php echo $row_pro['product_price'] ?>"  required="required">
           </div>

          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Keywords</label>
            <input type="text" name="product_keywords" class="form-control" value="<?php echo $row_pro['product_keywords'] ?>"  required="required">
           </div>
          
          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Description</label>
            <input type="text" name="product_desc" class="form-control" value="<?php echo $row_pro['product_desc'] ?>"  required="required"></input>
           </div>
          <!-- pro submit -->
           <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary form-control" value="Update Product">
           </div>
          
          </form>
        </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- ********* End insert product form ********* -->

<?php require_once('includes/jslinks.php'); ?>
</body>
</html>

<?php 
  if (isset($_POST['update'])) {
  	 
  	$id = $_GET['edit_product'];
    $product_title=$_POST['product_title'];
    $product_cat=$_POST['product_cat'];
    $cat=$_POST['cat'];
    $product_price=$_POST['product_price'];
    $product_keywords=$_POST['product_keywords'];
    $product_desc=$_POST['product_desc'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_img1 = $_FILES['product_img1']['tmp_name'];
    $temp_img2 = $_FILES['product_img2']['tmp_name'];
    $temp_img3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_img1, "product_img/$product_img1");
    move_uploaded_file($temp_img2, "product_img/$product_img2");
    move_uploaded_file($temp_img3, "product_img/$product_img3");
    // echo "<script>alert('product_cat = $product_cat .  cat = $cat . date =NOW(). product_title = $product_title . product_img1 = $product_img1 . product_img2 = $product_img2 . product_img3 = $product_img3 . product_price = $product_price . product_desc = $product_desc . product_keywords = $product_keywords des = $product_desc $id')</script>";
    $run = $conn->query("UPDATE products SET p_cat_id ='$product_cat', cat_id='$cat',pro_date=NOW(),product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' WHERE product_id = '$id'");

    if ($run) {
        echo "<script>alert('Product Update Successfully')</script>";
        echo "<script >window.open('main.php?view_product','_self')</script>";
    }else{
    	 echo "<script>alert('check query')</script>";
    }
  }
  }
?>



