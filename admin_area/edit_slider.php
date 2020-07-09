
  <div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?view_slider" class="breadcrumb-item">View Slider</a></li>
          <li class="ml-3 active">Edit Slider</li>
        </ul>
  </div>
   <!-- ************ View slider ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<div class="row">
				<form method="POST" enctype="multipart/form-data">
					<?php
						if (isset($_GET['edit_slider'])) {
							$id = $_GET['edit_slider'];
						$run = $conn->query("SELECT * FROM slider WHERE id = '$id'");
						$row = $run->fetch_assoc();
					?>
						<div class='offset-md-4 col-md-4'>
									<div class='card '>
										<div class='card-header'>
											<h4 class='text-center'><?php echo $row['slider_name']?></h4>
										</div>
										<div class='card-body'>
											<img src='slider_img/<?php echo $row['slider_img'] ?>' class='img-fluid'>
											<input type="file" name="slider_img" required="" class="form-control">
										</div>
										<div class='card-footer'>
											<input type="submit" name="update" class='btn btn-block btn-primary' value="Update Slider">
										</div>
									</div>
								</div>	
						<?php }
						
					?>
				</form>
			</div>
		</div>
	</div>
	<?php
		if (isset($_POST['update'])) {
			$id = $_GET['edit_slider'];
			$slider_img = $_FILES['slider_img']['name'];
			$temp_img = $_FILES['slider_img']['tmp_name'];
			echo "<script>alert('$slider_img  temp $temp_img')</script>";
			move_uploaded_file($temp_img, "slider_img/$slider_img");
			$up = $conn->query("UPDATE slider SET slider_img='$slider_img' WHERE id ='$id'");
			if ($up) {
			 	echo "<script>alert('Sliser Updated Successfully')</script>";
	        	echo "<script >window.open('main.php?view_slider','_self')</script>";
	   		}else{
	   			echo "<script>alert('check query')</script>";
	   		}
		}
	?>
  <!-- ************ View End ***********  -->
