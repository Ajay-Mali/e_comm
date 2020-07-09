<?php
	if (isset($_GET['del_order'])) {
		$id = $_GET['del_order'];
		if ($conn->query("DELETE FROM customer_order WHERE order_id='$id'")) {
			echo "<script>alert('Order Deleted Successfully')</script>";
      		 echo "<script >window.open('main.php?view_order','_self')</script>";
		}
	}
?>