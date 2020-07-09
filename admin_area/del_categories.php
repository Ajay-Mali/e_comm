<?php
	if (isset($_GET['del_categories'])) {
		echo "<script >window.open('main.php?view_categories','_self')</script>";
		exit();
		$id = $_GET['del_categories'];
		$del = $conn->query("DELETE FROM categories WHERE cat_id = '$id'");
		if ($del) {
			 echo "<script>alert('Product Deleted Successfully')</script>";
      		 echo "<script >window.open('main.php?view_categories','_self')</script>";
		}else{
			 echo "<script>alert('check Youer query')</script>";
       		 echo "<script >window.open('main.php?view_categories','_self')</script>";
		}
	}
?>