<?php
	if (isset($_GET['del_users'])) {
		
		echo "<script>window.open('main.php?view_users','_self')</script>";

		$id = $_GET['del_users'];
		if ($conn->query("DELETE FROM admins WHERE admin_id='$id'")) {
			echo "<script>alert('User Deleted Successfully')</script>";
      		echo "<script>window.open('main.php?view_users','_self')</script>";
		}
	}
?>