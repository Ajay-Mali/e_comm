<div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li class="ml-3 active">View Payment</li>
        </ul>
  </div>

  <!-- ************ View Product ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<?php 
						$i =1;
						$run_pro = $conn->query("SELECT * FROM `payments` ORDER BY `payment_id` DESC");
						$count  = mysqli_num_rows($run_pro);
						if ($count == 0) {
						echo"<div class = 'alert alert-danger' role = 'alert'><h1>No Payment Found</h1></div>";
					}else{?>
			<table class="table table-inverse table-hover ">
				<thead>
					
					<th>Pay no</th>
					<th>Invoice No </th>
					<th>Amount Paid</th>
					<th>Payment Method</th>
					<th>Reference No</th>
					<th>Payment Date</th>
					<th>Delete Payment</th>
					
				</thead>
				
				<tbody>
					<?php
							while ($row_pro = $run_pro->fetch_assoc()) {
				
							echo "<tr>
									<td>".$i."</td>
									<td>".$row_pro['invoice_no']."</td>
									<td>".$row_pro['amount']."</td>
									<td>".$row_pro['payment_mode']."</td>
									<td>".$row_pro['ref_no']."</td>
									<td>".$row_pro['payment_date']."</td>
									<td><a href='main.php?del_payment=".$row_pro['payment_id']."' class='btn btn-danger'><i class='fa fa-trash-o'></i> Delete</a></td>";
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
