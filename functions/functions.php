<?php 
	$conn = mysqli_connect('localhost','root','','ecom');
	global $conn;
	 // get user ip
	function getUserIp(){
		switch (true) {
			case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
			case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
			case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
			
			default: return $_SERVER['REMOTE_ADDR'];
			
		}
	}

	function addCard(){
		global $conn;
		if (isset($_GET['add_card'])) {
			$ip_add = getUserIp();
			$p_id = $_GET['add_card'];
			$pro_qty = $_POST['qty'];
			$pro_size = $_POST['size'];

			//echo $p_id.' '. $ip_add .' ' .$pro_qty .' '.$pro_size;
			$check_product = "SELECT * FROM card WHERE ip_add = '$ip_add' AND p_id = '$p_id'";
			$run_check = mysqli_query($conn, $check_product);
			if (mysqli_num_rows($run_check) > 0 ) {
				echo"<script>alert('This Product is Already added in card..');</script>";
				#echo"<script>alert('".$p_id."');</script>";
				echo"<script>window.open('details.php?pro_id=".$p_id."','_self')</script>";
			}else{
				$insert_card = "INSERT INTO card(p_id,ip_add,qty,size) VALUES ('$p_id','$ip_add','$pro_qty','$pro_size')";
				$run_insert = $conn->query($insert_card);
				if($run_insert)
				{
					echo"<script>alert('This Product is added To card..')</script>";
					echo"<script>window.open('details.php?pro_id=".$p_id."','_self')</script>";
				}else{
					echo"<script>window.open('details.php?pro_id=".$p_id."','_self')</script>";
				}
				
			}
		}
	}

	function item(){
		global $conn;
		$ip_add = getUserIp();
		$check_item = "SELECT * FROM card WHERE ip_add = '$ip_add'";
		$run_item = $conn->query($check_item);

		$count_item =mysqli_num_rows($run_item);
		echo $count_item." " ;
	}

	function totalPrice(){
		global $conn;
		$ip_add = getUserIp();
		$total = 0;
		$sql_price = "SELECT * FROM card WHERE ip_add = '$ip_add'";
		$run_price = $conn->query($sql_price);
		while ($row_price = $run_price->fetch_array()) {
			$pro_id = $row_price['p_id'];
			$pro_qty = $row_price['qty'];
			$get_price = "SELECT * FROM products WHERE product_id = '$pro_id'";
			$run_price1 = $conn->query($get_price);
			while ($row_price1 = $run_price1->fetch_array()) {
				$subtotal = $row_price1['product_price'] * $pro_qty;
				$total += $subtotal;
			}
			
		}
		echo $total;

	
	}

	function getPro(){
		global $conn;
		
		$sql = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,6";
		$run = $conn->query($sql);
		while ($row = $run->fetch_array()) {
			$pro_id = $row['product_id'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_img1 = $row['product_img1'];
			//echo $pro_id . "<br>";
			echo "<div class='col-md-3 col-sm-6 my-1'>
                <div class='card'>
                    <img src='admin_area/product_img/$pro_img1' class='img-fluid card-img-top'>
                    <div class='card-body text-center'>
                        <h5 class=card-title ><a href='details.php?pro_id=$pro_id'>$pro_title</a></h5>
                        <p class='card-text'>INR $pro_price </p>
                        <p class='btn-group'>
                          <a href='details.php?pro_id=$pro_id' class='btn btn-outline-secondary btn-sm'>View Details</a>  
                          <a href='details.php?pro_id=$pro_id' class='btn btn-outline-primary btn-sm'><i class='fa fa-shopping-cart mr-2'></i>Add to card</a>
                        </p>
                    </div>
                </div>
            </div>";
		}
	}
?>
<!-- card 1 -->
          <!--   <div class='col-md-3 col-sm-6 my-1'>
                <div class='card'>
                    <img src=".." class='card-img-top img-fluid'>
                    <div class='card-body text-center'>
                        <h5 class=card-title ><a href="#">White Polo Shirt</a></h5>
                        <p class='card-text'>INR 199</p>
                        <p class='btn-group '>
                          <a href='#' class='btn btn-outline-secondary btn-sm'>View Details</a>  
                          <a href='#' class='btn btn-outline-primary btn-sm'><i class='fa fa-shopping-cart mr-2'></i>Add to card</a>
                        </p>
                    </div>
                </div>
            </div>
 -->
<!-- ***************** product categoried ******************* -->
<?php 
	#***************** product categoried ******************* -->
	function Get_P_cat(){
		global $conn;
		$sql1 = "SELECT * FROM product_categories";
		$run1 = $conn->query($sql1);
		while($row1= $run1->fetch_array()){
			$p_cat_id = $row1['p_cat_id'];
            $p_cat_title = $row1['p_cat_title'];
            echo "<li class='list-group-item'><a href='shop.php?pc_id=$p_cat_id'>$p_cat_title</a></li>";
		}
	}
 #***************** end product categoried ******************* -->
?>
<!-- ***************** end product categoried ******************* -->

<!-- ***************** categoried ******************* -->
<?php 
	#***************** categoried ******************* -->
	function Get_cat(){
		global $conn;
		$sql1 = "SELECT * FROM categories";
		$run1 = $conn->query($sql1);
		while($row1= $run1->fetch_array()){
			$cat_id = $row1['cat_id'];
            $cat_title = $row1['cat_title'];
            echo "<li class='list-group-item'><a href='shop.php?c_id=$cat_id'>$cat_title</a></li>";
		}
	}
 #***************** end categoried ******************* -->
?>
<!-- ***************** end categoried ******************* -->

<!-- ***************** Get Product Categoried ******************* -->
<?php 
	#***************** Get Product Categoried ******************* -->
	function Get_P_cat_pro(){
		global $conn;
		if (isset($_GET['pc_id'])) {
			$pc_id = $_GET['pc_id'];
			$sql1 = "SELECT * FROM product_categories WHERE p_cat_id = '$pc_id' ";
			$run = $conn->query($sql1);
			$row = $run->fetch_array();
			$p_cat_title = $row['p_cat_title'];
			$p_cat_desc = $row['p_cat_desc'];
			// echo "<h3>".$p_cat_title."</h3><p>".$p_cat_desc."</p>";

			$pro_box = "SELECT * FROM products WHERE p_cat_id = '$pc_id'";
			$run_pbox = $conn->query($pro_box);
			#$box_row = $run_pbox->fetch_array();
			$count = mysqli_num_rows($run_pbox);
			if ($count == 0) {
				echo"<div class = 'alert alert-danger' role = 'alert'><h1>No Product Found In This Product Category</h1></div>";
			}else{
				echo "<h3>".$p_cat_title."</h3><p>".$p_cat_desc."</p>";
			}
			
			while ($row = $run_pbox->fetch_array()) {
					$pro_id = $row['product_id'];
					$pro_title = $row['product_title'];
					$pro_price = $row['product_price'];
					$pro_img1 = $row['product_img1'];
										//echo $pro_id . "<br>";
					echo "<div class='col-md-4 col-sm-6 my-1'>
							<div class='card'>
							<img src='admin_area/product_img/$pro_img1' class='img-fluid card-img-top'>
							<div class='card-body text-center'>
							<h5 class=card-title ><a href='details.php?pro_id=$pro_id'>$pro_title</a></h5>
							<p class='card-text'>INR $pro_price </p>
							<p class='btn-group'>
							<a href='details.php?pro_id=$pro_id' class='btn btn-outline-secondary btn-sm'>View Details</a>  
							<a href='details.php?pro_id=$pro_id' class='btn btn-outline-primary btn-sm'><i class='fa fa-shopping-cart mr-2'></i>Add to card</a>
							</p>
							</div>
							</div>
						 </div>";
			}
		}
	}
	
 #***************** end Get Product Categoried ******************* -->
?>
<!-- ***************** end Get Product Categoried ******************* -->




<!-- ***************** Get Categoried ******************* -->
<?php 
	#***************** Get Categoried ******************* -->
	function Get_cat_pro(){
		global $conn;
		if (isset($_GET['c_id'])) {
			$c_id = $_GET['c_id'];
			$sql1 = "SELECT * FROM categories WHERE cat_id = '$c_id' ";
			$run = $conn->query($sql1);
			$row = $run->fetch_array();
			$cat_title = $row['cat_title'];
			$cat_desc = $row['cat_desc'];
			// echo "<h3>".$cat_title."</h3><p>".$cat_desc."</p>";

			$pro_box = "SELECT * FROM products WHERE p_cat_id = '$c_id'";
			$run_pbox = $conn->query($pro_box);
			#$box_row = $run_pbox->fetch_array();
			$count = mysqli_num_rows($run_pbox);
			if ($count == 0) {
				echo"<div class = 'alert alert-danger' role = 'alert'><h1>No Product Found In This Category</h1></div>";
			}else{
				echo "<h3>".$cat_title."</h3><p>".$cat_desc."</p>";
			}
			
			while ($row = $run_pbox->fetch_array()) {
					$pro_id = $row['product_id'];
					$pro_title = $row['product_title'];
					$pro_price = $row['product_price'];
					$pro_img1 = $row['product_img1'];
										//echo $pro_id . "<br>";
					echo "<div class='col-md-4 col-sm-6 my-1'>
							<div class='card'>
							<img src='admin_area/product_img/$pro_img1' class='img-fluid card-img-top'>
							<div class='card-body text-center'>
							<h5 class=card-title ><a href='details.php?pro_id=$pro_id'>$pro_title</a></h5>
							<p class='card-text'>INR $pro_price </p>
							<p class='btn-group'>
							<a href='details.php?pro_id=$pro_id' class='btn btn-outline-secondary btn-sm'>View Details</a>  
							<a href='details.php?pro_id=$pro_id' class='btn btn-outline-primary btn-sm'><i class='fa fa-shopping-cart mr-2'></i>Add to card</a>
							</p>
							</div>
							</div>
						 </div>";
			}
		}
	}
	
 #***************** end Get Categoried ******************* -->
?>
<!-- ***************** end Get Categoried ******************* -->
