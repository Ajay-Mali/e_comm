<?php
  if (isset($_GET['edit_categories'])) {
    $id = $_GET['edit_categories'];
   
    $run = $conn->query("SELECT * FROM categories WHERE cat_id='$id'");
    $row = $run->fetch_assoc();
    $Title = $row['cat_title'];
    $desc = $row['cat_desc'];
    ?>
   
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?view_categories" class="breadcrumb-item ml-3">View Categories</a></li>
          <li class="ml-3 active">Update Categories</li>
        </ul>

  <!-- ********* start insert categories form ********* -->
   <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Update Categories</h2>
          </div>
            <div class="card-body">
              <form method="POST">
              <div class="form-group">
                <label>Categories Title :</label>
                <input type="text" name="cat_title" required="required" class="form-control" value="<?php echo $Title ?>" >
              </div>
              <div class="form-group">
                <label>Categories Description :</label>
                <input type="text" name="cat_desc" required="required" class="form-control" value="<?php echo $desc ?>" >
              </div>
              <input type="submit" name="update_cat" class="btn btn-block btn-primary" >
            </form>
            </div>
         
        </div>
      </div>
    </div>
  </div>
  
    <?php
      if (isset($_POST['update_cat'])) {
        $id = $_GET['edit_categories'];
        $cat_title = $_POST['cat_title'];
        $cat_desc = $_POST['cat_desc'];

        $run = $conn->query("UPDATE categories SET cat_title ='$cat_title' , cat_desc = '$cat_desc' WHERE cat_id = '$id'");
        if ($run) {
            echo "<script>alert('Categories Updated Successfully')</script>";
            echo "<script >window.open('main.php?view_categories','_self')</script>";
        }                     
      }
    ?>
  </div>
 <?php }else{
   echo "<script >window.open('main.php?view_categories','_self')</script>";
 }

?>