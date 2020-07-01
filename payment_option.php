<div class="card">
	<div class="card-header">
		<?php
			$s_email = $_SESSION['customer_email'];
			$run = $conn->query("SELECT * FROM customers WHERE customer_email = '$s_email'");
			$row = $run->fetch_assoc();
			$c_id = $row['customer_id'];

		?>
		<h3 class="text-center">Payment Options</h3>
	</div>
	<div class="card-body text-center">
		<a href="order.php?c_id=<?php echo $c_id ?>"><h4>Offling Payment Options</h4></a>
	</div>
</div>