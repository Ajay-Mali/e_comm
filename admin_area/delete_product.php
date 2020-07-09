<?php 

	if (isset($_GET['delete_product'])) {
		$id = $_GET['delete_product'];
		$del = $conn->query("DELETE FROM products WHERE product_id = '$id'");
		if ($del) {
			 echo "<script>alert('Product Deleted Successfully')</script>";
      		 echo "<script >window.open('main.php?view_product','_self')</script>";
		}else{
			 echo "<script>alert('check Youer query')</script>";
       		 echo "<script >window.open('main.php?view_product','_self')</script>";
		}
	}
?>