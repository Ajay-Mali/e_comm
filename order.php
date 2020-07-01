<?php 

	if (isset($_GET['c_id'])) {
	require_once('includes/db.php');
	require_once('functions/functions.php');
	$c_id = $_GET['c_id'];
	$ip_add = getUserIp();
	$status = "pending";
	$invoice_no = mt_rand();
	$run_card = $conn->query("SELECT * FROM card WHERE ip_add = '$ip_add'");
	if(mysqli_num_rows($run_card)>0){
		while($row_card = $run_card->fetch_assoc()){
			$pro_id = $row_card['p_id'];
			$size = $row_card['size'];
			$qty = $row_card['qty'];
			$run_pro = $conn->query("SELECT * FROM products WHERE product_id = '$pro_id'");
			while ($row_pro = $run_pro->fetch_assoc()) {
				$total = $row_pro['product_price'] * $qty;
				$conn->query("INSERT INTO `customer_order`(`customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES ('$c_id','$total','$invoice_no','$qty','$size',NOW(),'$status')");
				// $conn->query("INSERT INTO `pending_order`(`customer_id`, `invoice_on`, `product_id`, `qty`, `size`, `order_status`) VALUES ('$c_id','$invoice_no','$pro_id','$qty','$size','$status')");
				$conn->query("DELETE FROM card WHERE ip_add = '$ip_add'");

				echo "<script>alert('Your Order Has Been Submiited...')</script>";
				echo "<script>window.open('customer_area/my_account.php?my_order','_self')</script>";
			}
		}
	}else{
		echo "<script>window.open('shop.php','_self')</script>";
	}
	}else{
		  echo "<script>window.open('checkout.php','_self')</script>";
	}
?>