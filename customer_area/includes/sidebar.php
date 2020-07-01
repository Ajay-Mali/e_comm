<?php 
	$s_email = $_SESSION['customer_email'];
	$run = $conn->query("SELECT customer_img FROM customers WHERE customer_email = '$s_email'");
	$row = $run->fetch_assoc();
 ?>
<div class="card">
	<div class="card-header p-0">
		<img src="customer_img/<?php echo $row['customer_img'] ?>" class="img-fluid">
	</div>
	<div class="card-body px-2">
		<h5 class="text-center card-title mt-2"><?php echo $_SESSION['customer_name'] ?></h5>	
		<ul class="nav nav-pills flex-column navbar-dark">
			<li class='nav-item'>
				<a href="my_account.php?my_order" class="nav-link  <?php if (isset($_REQUEST['my_order'])){echo "active";} ?>"><i class="fa fa-list mr-2" ></i>My Order</a>
			</li>

			<li class="nav-item ">
				<a href="my_account.php?pay_offline" class="nav-link <?php if (isset($_REQUEST['pay_offline'])){echo "active";} ?>"><i class="fa fa-bolt mr-2" ></i>Pay Offline</a>
			</li>

			<!-- <li class="nav-item ">
				<a href="my_account.php?my_address" class="nav-link <?php //if (isset($_REQUEST['my_address'])){echo "active";} ?>"><i class="fa fa-user mr-2" ></i>My Address</a>
			</li>
 -->
			<li class="nav-item ">
				<a href="my_account.php?edit_account" class="nav-link <?php if (isset($_REQUEST['edit_account'])){echo "active";} ?>"><i class="fa fa-pencil mr-2" ></i>Edit Account</a>
			</li>

			<li class="nav-item ">
				<a href="my_account.php?change_password" class="nav-link <?php if (isset($_REQUEST['change_password'])){echo "active";} ?>"><i class="fa fa-user mr-2" ></i>Change Password</a>
			</li>

			<!-- <li class="nav-item ">
				<a href="my_account.php?my_wishlist" class="nav-link <?php //if (isset($_REQUEST['my_wishlist'])){echo "active";} ?>"><i class="fa fa-bolt mr-2" ></i>My Wishlist</a>
			</li> -->

			<li class="nav-item ">
				<a href="my_account.php?delete_account" class="nav-link <?php if (isset($_REQUEST['delete_account'])){echo "active";} ?>"><i class="fa fa-lock mr-2" ></i>Delete Account</a>
			</li>

			<li class="nav-item <?php if (isset($_REQUEST['logout'])){echo "active";} ?>">
				<a href="../logout.php" class="nav-link <?php if (isset($_REQUEST['logout'])){echo "active";} ?>"><i class="fa fa-sign-out mr-2" ></i>Logout</a>
			</li>
		</ul>
	</div>
</div>