<?php
	if (isset($_GET['del_product_cat'])) {
		echo "<script >window.open('main.php?view_product_cat','_self')</script>";
		exit();
		$id = $_GET['del_product_cat'];
		$del = $conn->query("DELETE FROM product_categories WHERE p_cat_id = '$id'");
		if ($del) {
			 echo "<script>alert('Product Deleted Successfully')</script>";
      		 echo "<script >window.open('main.php?view_product_cat','_self')</script>";
		}else{
			 echo "<script>alert('check Youer query')</script>";
       		 echo "<script >window.open('main.php?view_product_cat','_self')</script>";
		}
	}
?>