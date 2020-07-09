<nav class="navbar navbar-dark sticky-top bg-dark pl-0" >
	
	<div class="navbar-header">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-ex-collapse">
			<span class="sr-only">Toggle Navigation</span>
			<span class="navbar-toggler-icon"></span>
		</button>
		<a href="main.php?dashboard" class="navbar-brand" style="direction: none; color: white;">Admin Panel</a>
	</div>
	
	<!-- admin dropdown button -->
	<ul class="nav navbar-rigth top-nav">
		<li class="dropdown">
			<a href="" class="dropdown-toggle btn-light btn" data-toggle="dropdown" data-target=".dropdown-menu">
				<i class="fa fa-user mr-1"></i> Ajay Mali
			</a>
				<!-- dropdown menu -->
				<div class="dropdown-menu dropdown-menu-right">
					<a href="main.php?user_profile" class="dropdown-item">
						<i class="fa fa-user "></i> Profile
					</a>
				
					<a href="main.php?view_product" class="dropdown-item">
						<i class="fa fa-envelope"></i> Products
					</a>

					<a href="main.php?view_customer" class="dropdown-item">
						<i class="fa fa-users"></i> Customer
					</a>
				
					<a href="main.php?view_order" class="dropdown-item">
						<i class="fa fa-gear"></i> Order
					</a>
					<div class="dropdown-divider"></div>
					<a href="../logout.php" class="dropdown-item">
						<i class="fa fa-power-off"></i> Logout
					</a>
				</div> 
		</li>
	</ul>
	
	<!-- collapse navbar -->

	<div class=" navbar-collapse navbar-ex-collapse">
		<ul class="nav navbar-nav" id="side-nav">
			<!-- Dashboard -->
			<li>
				<a class="ak" href="main.php?dashboard" >
					<i class="fa fa-dashboard mr-1"></i>Dashboard
				</a>
			</li>
			<!-- View Customer -->
			<li>
				<a class="ak" href="main.php?view_customer" >
					<i class="fa fa-edit mr-1"></i>View Customer
				</a>
			</li>
			<!-- View Order -->
			<li>
				<a class="ak" href="main.php?view_order" >
					<i class="fa fa-list mr-1"></i>View Order
				</a>
			</li>
			<!-- View Payment -->
			<li>
				<a class="ak" href="main.php?view_payment" >
					<i class="fa fa-pencil mr-1"></i>View Payment
				</a>
			</li>
			<!-- Product -->
			<li>
				<a href="#"  data-toggle="collapse" data-target="#pro">
					<i class="fa fa-table mr-1"></i>Product <i class="fa fa-caret-down"></i>
				</a>
				<ul id="pro" class="collapse">
					<li>
						<a href="main.php?insert_product" >
							<i class="fa fa-view mr-1"></i>Insert Product
						</a>
					</li>
					<li>
						<a href="main.php?view_product" >
							<i class="fa fa-add mr-1"></i>View Product
						</a>
					</li>
				</ul>
			</li>
			<!-- Product Categories -->
			<li>
				<a href="#"  data-toggle="collapse" data-target="#pro_cat">
					<i class="fa fa-table mr-1"></i>Product Categories <i class="fa fa-caret-down"></i>
				</a>
				<ul id="pro_cat" class="collapse">
					<li>
						<a href="main.php?insert_product_cat" style="font-size: 16px;"  >
							<i class="fa fa-view mr-1"></i>Insert Product Categories
						</a>
					</li>
					<li>
						<a href="main.php?view_product_cat"  style="font-size: 16px;">
							<i class="fa fa-add mr-1"></i>View Product Categories
						</a>
					</li>
				</ul>
			</li>
			<!-- categories -->
			<li>
				<a href="#"  data-toggle="collapse" data-target="#cat">
					<i class="fa fa-table mr-1"></i>Categories <i class="fa fa-caret-down"></i>
				</a>
				<ul id="cat" class="collapse">
					<li>
						<a href="main.php?insert_categories" >
							<i class="fa fa-view mr-1"></i>Insert Categories
						</a>
					</li>
					<li>
						<a href="main.php?view_categories" >
							<i class="fa fa-add mr-1"></i>View Categories
						</a>
					</li>
				</ul>
			</li>
			<!-- Users -->
			<li>
				<a href="#"  data-toggle="collapse" data-target="#users">
					<i class="fa fa-table mr-1"></i>Users <i class="fa fa-caret-down"></i>
				</a>
				<ul id="users" class="collapse">
					<li>
						<a href="main.php?insert_users" >
							<i class="fa fa-view mr-1"></i>Insert Users
						</a>
					</li>
					<li>
						<a href="main.php?view_users" >
							<i class="fa fa-add mr-1"></i>View Users
						</a>
					</li>
					
				</ul>
			</li>
			<!-- slider -->
			<li>
				<a class="ak" href="main.php?view_slider" >
					<i class="fa fa-add"></i>View slider
				</a>
			</li>
		</ul>
	</div>
</nav>