<?php
	if (isset($_GET['del_payment'])) {
		$id = $_GET['del_payment'];
		if ($conn->query("DELETE FROM payments WHERE payment_id='$id'")) {
			echo "<script>alert('Payment Deleted Successfully')</script>";
      		 echo "<script >window.open('main.php?view_payment','_self')</script>";
		}
	}
?>