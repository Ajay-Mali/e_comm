
  <div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?insert_categories" class="breadcrumb-item ml-3">Insert Categories</a></li>
          <li class="ml-3 active">View Categories</li>
        </ul>
  </div>
   <!-- ************ View Categories ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<table class="table table-inverse table-hover ">
				<thead>
					
					<th>In no</th>
					<th>Categories Title</th>
					<th>Categories Description </th>
					<th>Delete</th>
					<th>Edit</th>
				</thead>
				
				<tbody>
					<?php 
						$i =1;
						$run_pro = $conn->query("SELECT * FROM categories");
						while ($row_pro = $run_pro->fetch_assoc()) {
							echo "<tr>
									<td>".$i."</td>
									<td>".$row_pro['cat_title']."</td>
									<td>".$row_pro['cat_desc']."</td>
									<td><a href='main.php?del_categories=".$row_pro['cat_id']."' class='btn btn-danger' disabled><i class='fa fa-trash-o'></i> Delete</a></td>
									<td><a href='main.php?edit_categories=".$row_pro['cat_id']."' class='btn btn-warning'><i class='fa fa-pencil'></i> Edit</a></td>	";
									$i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
  <!-- ************ View End ***********  -->