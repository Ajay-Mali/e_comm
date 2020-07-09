<div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li class="ml-3 active">View Order</li>
        </ul>
  </div>

  <!-- ************ View Product ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<?php 
						$i =1;
						$run_pro = $conn->query("SELECT * FROM customer_order");
						$count  = mysqli_num_rows($run_pro);
						if ($count == 0) {
						echo"<div class = 'alert alert-danger' role = 'alert'><h1>No Order Found</h1></div>";
					}else{?>
			<table class="table table-inverse table-hover ">
				<thead>
					
					<th>Order no</th>
					<th>Customer Email</th>
					<th>Invoice No </th>
					<th>Product Title</th>
					<th>Product Qty</th>
					<th>Product Size</th>
					<th>Order Date</th>
					<th>Total Amount</th>
					<th>Order Status</th>
					<th>Admin Status</th>
					<th>Order Delete</th>
					
				</thead>
				
				<tbody>
					<?php
							while ($row_pro = $run_pro->fetch_assoc()) {
								$c_id = $row_pro['product_id'];
								$run_cust = $conn->query("SELECT customer_email FROM customers WHERE customer_id='$c_id'");
								$row_cust = $run_cust->fetch_assoc();

								$p_id = $row_pro['customer_id'];
								$run_product = $conn->query("SELECT product_title FROM products WHERE product_id='$p_id'");
								$row_product = $run_product->fetch_assoc();

								if ($row_pro['order_status'] == 'pending') {
									$Status_pay = 'Unpaid';
								}else{
									$Status_pay = 'Paid';
								}
								
							echo "<tr>
									<td>".$i."</td>
									<td>".$row_cust['customer_email']."</td>
									<td>".$row_pro['invoice_no']."</td>
									<td>".$row_product['product_title']."</td>
									<td>".$row_pro['qty']."</td>
									<td>".$row_pro['size']."</td>
									<td>".$row_pro['order_date']."</td>
									<td>".$row_pro['due_amount']."</td>
									<td>".$Status_pay."</td>
									<td>".$row_pro['admin_status']."</td>
									<td><a href='main.php?del_order=".$row_pro['order_id']."' class='btn btn-danger'><i class='fa fa-trash-o'></i> Delete</a></td>";
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
