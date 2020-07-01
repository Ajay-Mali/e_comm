<div class="container">
	<div class="card">
		<div class="card-header">
			<center>
				<h1>My Order</h1>
				<p class="text-muted">if you have any questions, please feel free to <a href="../contactus.php">contact us, our customer service center is working for you 24/7</a></p>
			</center>
		</div>
		<div class="card-body ml-lg-5">
			<table class="table table-responsive table-hover">
				<thead>
							<th>Sr.no</th>
							<th>Due Amount</th>
							<th>Invoice Number</th>
							<th>Quantity</th>
							<th>Size</th>
							<th>Order Date</th>
							<th>Paid/Unpaid</th>
							<th>Status</th>
				</thead>
				<tbody>
				<?php 
				    $s_email = $_SESSION['customer_email'];
				    $c_run = $conn->query("SELECT * FROM customers WHERE customer_email = '$s_email'");
				    $c_row = $c_run->fetch_assoc();
				    $c_id = $c_row['customer_id'];

				    $run_order = $conn->query(" SELECT * FROM `customer_order` WHERE customer_id = '$c_id'ORDER BY `customer_order`.`order_id` DESC");
				    $i=1;
				    while ($row_order = $run_order->fetch_assoc()) {
				    	$o_date = substr($row_order['order_date'], 0,11);
				    	$o_id = $row_order['order_id'];
				    	$status = $row_order['order_status'];
				    	if ($status == 'pending') {
				    		$status = 'Unpaid';
				    		$dis = "<a href='confirm.php?o_id=$o_id' class='btn btn-primary btn-sm' >Confirm If Paid</a>";
				    		//
				    	}else{
				    		$status = 'Paid';
				    		$dis = "<button class='btn btn-success btn-sm' disabled='' >Paid</button>";
				    		// <a href='confirm.php?o_id=$o_id' class='btn btn-primary btn-sm' disabled="" >Confirm If Paid</a>
				    	}
				    	echo "<tr>
								<td>".$i."</td>
								<td>".$row_order['due_amount'] ." INR</td>
								<td>".$row_order['invoice_no']."</td>
								<td>".$row_order['qty']."</td>
								<td>".$row_order['size']."</td>
								<td>".$o_date."</td>
								<td>".$status."</td>
								<td>".$dis."</td>
							</tr>";
							$i++;
				    }
				 ?>
 				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- <img src="customer_img/2.jpg" class="img-fluid"> -->

	
		

</div>
<!-- <img src="customer_img/2.jpg" class="img-fluid"> -->