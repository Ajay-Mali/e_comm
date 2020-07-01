<?php require_once("../includes/db.php") ?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert Product</title>
  <?php require_once('includes/csslinks.php'); ?>
</head>
<body>
  <!-- ********* start insert product form ********* -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Insert Product</h2>
          </div>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data">
          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Title</label>
            <input type="text" name="product_title" class="form-control"  required="required">
           </div>

          <!-- pro Categories -->
           <div class="form-group">
            <label class="h4">Product Categories</label>
            <select class="form-control"  required="required" name="product_cat">
              <option>Select Product Categories</option>
              <?php
                $get_p_cat ="SELECT * FROM product_categories";
                $set_p_cat = mysqli_query($conn,$get_p_cat);
                while ($row = mysqli_fetch_array($set_p_cat)) {
                  $id = $row['p_cat_id'];
                  $title = $row['p_cat_title'];

                  echo '<option value='.$id.'>'.$title.'</option>';
                }
              ?>
            </select>
           </div>
          
          <!--  Categories -->
           <div class="form-group">
            <label class="h4">Categories</label>
            <select class="form-control"  required="required" name="cat">
              <option>Select Categories</option>
              <?php
                $get_p_cat ="SELECT * FROM categories";
                $set_p_cat = mysqli_query($conn,$get_p_cat);
                while ($row = mysqli_fetch_array($set_p_cat)) {
                  $id = $row['cat_id'];
                  $title = $row['cat_title'];

                  echo '<option value='.$id.'>'.$title.'</option>';
                }
              ?>
            </select>
           </div>

          <!-- pro img1 -->
           <div class="form-group">
            <label class="h4">Product Image 1</label>
            <input type="file" name="product_img1" class="form-control p-1"  required="required">
           </div>

            <!-- pro img2 -->
           <div class="form-group">
            <label class="h4">Product Image 2</label>
            <input type="file" name="product_img2" class="form-control p-1"  required="required">
           </div>

            <!-- pro img 3 -->
           <div class="form-group">
            <label class="h4">Product Image 3</label>
            <input type="file" name="product_img3" class="form-control p-1"  required="required">
           </div>

          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Price</label>
            <input type="text" name="product_price" class="form-control"  required="required">
           </div>

          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Keywords</label>
            <input type="text" name="product_keywords" class="form-control"  required="required">
           </div>
          
          <!-- pro title -->
           <div class="form-group">
            <label class="h4">Product Description</label>
            <textarea name="product_desc" class="form-control"  required="required"></textarea>
           </div>
          <!-- pro submit -->
           <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary form-control" value="Insert Product">
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
  if (isset($_POST['submit'])) {
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

    $insert_pro = "INSERT INTO products ( `p_cat_id`, `cat_id`, `data`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords')";
    $run = $conn->query($insert_pro);

    if ($run) {
        echo "<script>alert('Product Inserted Successfully')</script>";
        echo "<script >window.open('insert_product.php')</script>";
    }
  }
?>



