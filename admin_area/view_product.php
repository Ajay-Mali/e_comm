<div class="">
    <ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
          <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
          <li><a href="main.php?insert_product" class="breadcrumb-item ml-3">Insert Product</a></li>
          <li class="ml-3 active">View Product</li>
        </ul>
  </div>

  <!-- ************ View Product ***********  -->
	<div class="card mr-2">
		<div class="card-body">
			<table class="table table-inverse table-hover ">
				<thead>
					
					<th>In no</th>
					<th>Pro Title</th>
					<th>Pro Image</th>
					<th>Pro Price</th>
					<th>Pro Keyword</th>
					<th>Pro Date</th>
					<th>Delete</th>
					<th>Edit</th>
				</thead>
				
				<tbody>
					<?php 
						$i =1;
						$run_pro = $conn->query("SELECT * FROM products");
						while ($row_pro = $run_pro->fetch_assoc()) {
							echo "<tr>
									<td>".$i."</td>
									<td>".$row_pro['product_title']."</td>
									<td><img src='product_img/".$row_pro['product_img1']."' class='img-fluid' height='50px' width='50px'></td>
									<td>".$row_pro['product_price']."</td>
									<td>".$row_pro['product_keywords']."</td>
									<td>".$row_pro['pro_date']."</td>
									<td><a href='main.php?delete_product=".$row_pro['product_id']."' class='btn btn-danger'><i class='fa fa-trash-o'></i> Delete</a></td>
									<td><a href='main.php?edit_product=".$row_pro['product_id']."' class='btn btn-warning'><i class='fa fa-pencil'></i> Edit</a></td>	";
									$i++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
  <!-- ************ View Product End ***********  -->
