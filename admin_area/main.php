<?php require_once("../includes/db.php");
	if (!isset($_SESSION['admin_email'])) {
		 echo "<script>window.open('login.php','_self')</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once('includes/csslinks.php'); ?>
	<link rel="stylesheet" href="includes/style.css">
</head>
<body>
<?php require_once('includes/sidebar.php'); ?>
<!-- ****** Main section ******* -->
	<div class="main_div">
		<?php
		// dashboard
		if (isset($_GET['dashboard'])) {
			include 'dashboard.php';
		}

		//confirm_admin_order
		if (isset($_GET['confirm_admin_order'])) {
			include 'confirm_admin_order.php';
		}
################## Customer ###############
		// view customer
		if (isset($_GET['view_customer'])) {
			include 'view_customer.php';
		}
		// del customer
		if (isset($_GET['del_customer'])) {
			include 'del_customer.php';
		}
################## Order ###############
		// view order
		if (isset($_GET['view_order'])) {
			include 'view_order.php';
		}
		// del order
		if (isset($_GET['del_order'])) {
			include 'del_order.php';
		}


################## Product ###############
		// view payment
		if (isset($_GET['view_payment'])) {
			include 'view_payment.php';
		}
		// del payment
		if (isset($_GET['del_payment'])) {
			include 'del_payment.php';
		}
################## Product ###############
		// insert product
		if (isset($_GET['insert_product'])) {
			include 'insert_product.php';
		}

		// view product
		if (isset($_GET['view_product'])) {
			include 'view_product.php';
		}

		// Edit product
		if (isset($_GET['edit_product'])) {
			include 'edit_product.php';
		}

		// Delete product
		if (isset($_GET['delete_product'])) {
			include 'delete_product.php';
		}
################## Product Categories ###############
		
		// Insert Product Categories
		if (isset($_GET['insert_product_cat'])) {
			include 'insert_product_cat.php';
		}

		// view product categroies
		if (isset($_GET['view_product_cat'])) {
			include 'view_product_cat.php';
		}

		// Edit product categroies
		if (isset($_GET['edit_product_cat'])) {
			include 'edit_product_cat.php';
		}

		// view product categroies
		if (isset($_GET['del_product_cat'])) {
			include 'del_product_cat.php';
		}
############## Categories ##########################
		// Insert categories
		if (isset($_GET['insert_categories'])) {
			include 'insert_categories.php';
		}

		// view categories
		if (isset($_GET['view_categories'])) {
			include 'view_categories.php';
		}

		// Edit categories
		if (isset($_GET['edit_categories'])) {
			include 'edit_categories.php';
		}

		// view categories
		if (isset($_GET['del_categories'])) {
			include 'del_categories.php';
		}
############## Slider ##########################
		// view slider
		if (isset($_GET['view_slider'])) {
			include 'view_slider.php';
		}

		// edit slider
		if (isset($_GET['edit_slider'])) {
			include 'edit_slider.php';
		}
############## user ##########################
		// Insert user
		if (isset($_GET['insert_users'])) {
			include 'insert_user.php';
		}

		// view user
		if (isset($_GET['view_users'])) {
			include 'view_user.php';
		}

		// Edit user
		if (isset($_GET['edit_users'])) {
			include 'edit_user.php';
		}

		// view user
		if (isset($_GET['del_user'])) {
			include 'del_user.php';
		}

		// view user profile
		if (isset($_GET['user_profile'])) {
			include 'user_profile.php';
		}

	?>
	</div>

<!-- ****** End main section *****-->
<?php require_once('includes/jslinks.php') ?>
</body>
</html>