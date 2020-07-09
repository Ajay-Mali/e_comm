<?php
	if (isset($_GET['del_customer'])) {
		$id = $_GET['del_customer'];
		if ($conn->query("DELETE FROM customers WHERE customer_id='$id'")) {
			echo "<script>alert('customer Deleted Successfully')</script>";
      		 echo "<script >window.open('main.php?view_customer','_self')</script>";
		}
	}
?>