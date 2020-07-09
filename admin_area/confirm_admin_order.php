<?php
	if (isset($_GET['confirm_admin_order'])) {
		$id = $_GET['confirm_admin_order'];
		$status = "complete";
		if ($conn->query("UPDATE customer_order SET admin_status = '$status' WHERE order_id = '$id'")) {
			echo "<script>window.open('main.php?view_order','_self')</script>";
		}else{
			echo "<script>window.open('main.php?dashboard','_self')</script>";
		}

	}
?>