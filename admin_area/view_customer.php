<div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li class="ml-3 active">View Customer</li>
        </ul>
  </div>

  <!-- ************ View Product ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<?php 
						$i =1;
						$run_pro = $conn->query("SELECT * FROM customers");
						$count  = mysqli_num_rows($run_pro);
						if ($count == 0) {
						echo"<div class = 'alert alert-danger' role = 'alert'><h1>No Customer Found</h1></div>";
					}else{?>
			<table class="table table-inverse table-hover ">
				<thead>
					
					<th>Cust no</th>
					<th>Customer Name</th>
					<th>Customer Email</th>
					<th>Customer Image</th>
					<th>Customer country</th>
					<th>Customer City</th>
					<th>Customer Contact</th>
					<th>Delete Customer</th>
					
				</thead>
				
				<tbody>
					<?php
							while ($row_pro = $run_pro->fetch_assoc()) {
							echo "<tr>
									<td>".$i."</td>
									<td>".$row_pro['customer_name']."</td>
									<td>".$row_pro['customer_email']."</td>
									<td><img src='../customer_area/customer_img/".$row_pro['customer_img']."' class='img-fluid' height='50px' width='50px'></td>
									<td>".$row_pro['customer_country']."</td>
									<td>".$row_pro['customer_city']."</td>
									<td>".$row_pro['customer_contact']."</td>
									<td><a href='main.php?del_customer=".$row_pro['customer_id']."' class='btn btn-danger'><i class='fa fa-trash-o'></i> Delete</a></td>";
									$i++;
							}
						
						
					?>
				</tbody>
			</table>
			<?php

				}
			?>
		</div>
	</div>
  <!-- ************ View Product End ***********  -->
