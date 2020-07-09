<div class="container-fluid mt-3">
	<div class="card">
		<div class="card-header text-center">
			<h4>Dashboard</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<!-- product card -->
				<div class="col-md-6 col-lg-3 mt-sm-2 ">
					<div class="card text-white bg-primary">
						<div class="card-body ">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-tasks fa-4x"></i>
								</div>
								<div class="col-sm-9 text-right ">
									<?php
										$run = $conn->query("SELECT * FROM products");
										$count_pro = mysqli_num_rows($run);
										echo "<h2>$count_pro</h2>";
									?>
									
									<h3>Product</h3>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<a class="text-white" href="main.php?view_product" class="card-link">
							<span class="pull-left">View Product</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							</a>

						</div>
					</div>
				</div>

				<!-- customer card -->
				<div class="col-md-6 col-lg-3 mt-sm-2">
					<div class="card text-white bg-danger">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-users fa-4x"></i>
								</div>
								<div class="col-sm-9 text-right">
									<?php
										$run_cust = $conn->query("SELECT * FROM customers");
										$count_cust = mysqli_num_rows($run_cust);
										echo "<h2>$count_cust</h2>";
									?>
									<h3>Customers</h3>
								</div>
							</div>
						</div>
						<div class="card-footer">
							 <a class="text-white" href="main.php?view_customer">
							 	<span class="pull-left">View Customer</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 </a>
						</div>
					</div>
				</div>

				<!-- Order card -->
				<div class="col-md-6 col-lg-3 mt-sm-2">
					<div class="card text-white bg-secondary">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-support fa-4x"></i>
								</div>
								<div class="col-sm-9 text-right">
									<?php
										$run_order = $conn->query("SELECT * FROM customer_order");
										$count_order = mysqli_num_rows($run_order);
										echo "<h2>$count_order</h2>";
									?>
									<h3>Order</h3>
								</div>
							</div>
						</div>
						<div class="card-footer">
							 <a class="text-white" href="main.php?view_order">
							 	<span class="pull-left">View Order</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 </a>
						</div>
					</div>
				</div>
				
				<!-- Product Categories card -->
				<div class="col-md-6 col-lg-3 mt-sm-2">
					<div class="card text-white bg-warning ">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-2">
									<i class="fa fa-shopping-cart fa-4x"></i>
								</div>
								<div class="col-sm-10 text-right">
									<?php
										$run_cat = $conn->query("SELECT * FROM product_categories");
										$count_cat = mysqli_num_rows($run_cat);
										echo "<h2>$count_cat</h2>";
									?>
									<h4>Product Categories</h4>
								</div>
							</div>
						</div>
						<div class="card-footer">
							 <a class="text-white" href="main.php?view_product_cat">
							 	<span class="pull-left">View Product Categories</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							 </a>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 mt-5">
					<div class="card">
						<div class="card-body">
							<h1 class="text-center">Pending Orders</h1>
							<table>
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
								<th>Payment Status</th>
								<th>Order Delete</th>
								
							</thead>
							
							<tbody>
								<?php
										while ($row_pro = $run_pro->fetch_assoc()) {
											if ($row_pro['admin_status'] == 'pending' or $row_pro['order_status'] == 'pending') {
												if ($row_pro['order_status'] == 'pending') {
												$Status_pay = 'Unpaid';
												}else{
													$Status_pay = 'Paid';
												}

													$c_id = $row_pro['customer_id'];
													$run_cust = $conn->query("SELECT customer_email FROM customers WHERE customer_id='$c_id'");
													$row_cust = $run_cust->fetch_assoc();

													$p_id = $row_pro['product_id'];
													$run_product = $conn->query("SELECT product_title FROM products WHERE product_id='$p_id'");
													$row_product = $run_product->fetch_assoc();
													
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
														<td><a href='main.php?confirm_admin_order=".$row_pro['order_id']."' class='btn btn-info'> Confirm Order</a></td>";
													
														$i++;
											}
											
											// 	}
											// // else{
											// // 	echo"<div class = 'alert alert-danger' role = 'alert'><h1>No Product Found In This Pending Orders...</h1></div>";
											// // }
										}
									
									
								?>
							</tbody>
						</table>
						<?php

							}
						?>
								</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
