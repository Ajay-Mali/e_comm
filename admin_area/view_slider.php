
  <div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li class="ml-3 active">View Slider</li>
        </ul>
  </div>
   <!-- ************ View slider ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<div class="row">
				
					<?php
						$run = $conn->query("SELECT * FROM slider");
						while ($row = $run->fetch_assoc()) {
							echo "<div class='col-md-3'>
									<div class='card '>
										<div class='card-header'>
											<h4 class='text-center'>".$row['slider_name']."</h4>
										</div>
										<div class='card-body'>
											<img src='slider_img/".$row['slider_img']."' class='img-fluid'>
										</div>
										<div class='card-footer'>
											<a href='main.php?edit_slider=".$row['id']."' class='btn btn-block btn-primary'>Edit Slider</a>
										</div>
									</div>
								</div>";
						}
					?>
					
				
			</div>
		</div>
	</div>
  <!-- ************ View End ***********  -->