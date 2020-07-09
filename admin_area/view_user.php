<div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?insert_users" class="breadcrumb-item ml-3">Insert User</a></li>
          <li class="ml-3 active">View Users</li>
        </ul>
  </div>

  <!-- ************ View Product ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<table class="table table-inverse table-hover ">
				<thead>
					
					<th>In no</th>
					<th>User Name</th>
					<th>User Email</th>
					<th>User Img</th>
					<th>User Job</th>
					<th>Contact</th>
					<th>Addres</th>
					<th>User About</th>
					<th>Delete</th>
					<th>Edit</th>
				</thead>
				
				<tbody>
					<?php 
						$i =1;
						$run_pro = $conn->query("SELECT * FROM admins");
						while ($row_pro = $run_pro->fetch_assoc()) {
							echo "<tr>
									<td>".$i."</td>
									<td>".$row_pro['admin_name']."</td>
									<td>".$row_pro['admin_email']."</td>
									<td><img src='admin_img/".$row_pro['admin_img']."' class='img-fluid' height='50px' width='50px'></td>
									<td>".$row_pro['admin_job']."</td>
									<td>".$row_pro['admin_contact']."</td>
									<td>".$row_pro['admin_add']."</td>
									<td>".$row_pro['admin_about']."</td>
									<td><a href='main.php?del_users=".$row_pro['admin_id']."' class='btn btn-danger'><i class='fa fa-trash-o'></i> Delete</a></td>
									<td><a href='main.php?edit_users=".$row_pro['admin_id']."' class='btn btn-warning'><i class='fa fa-pencil'></i> Edit</a></td>	";
									$i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
  <!-- ************ View Product End ***********  -->
