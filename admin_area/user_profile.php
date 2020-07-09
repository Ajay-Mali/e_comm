<ul class="breadcrumb mt-3 mr-2 shadow-sm  bg-light"> 
    <li><a href="main.php?dashboard" class="breadcrumb-item">Dashboard</a></li>
    <li class="ml-3 active">User Profile</li>
</ul>
<div class="row">
	<div class="offset-md-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<?php
					$admin_email = "aj@gmail.com";
					$run = $conn->query("SELECT * FROM admins WHERE admin_email ='$admin_email'");
					$row = $run->fetch_assoc();

				?>
				<table class="table">
					<tr>
						<td colspan="2"><img src="admin_img/<?php echo $row['admin_img'];?>" class="img-fluid img-thumbnail" ></td>
					</tr>
					<tr>
						<td>User Name</td>
						<td><?php echo $row['admin_name']; ?></td>
					</tr>
					<tr>
						<td>User Email</td>
						<td><?php echo $row['admin_email']; ?></td>
					</tr>
					<tr>
						<td>User Job</td>
						<td><?php echo $row['admin_job']; ?></td>
					</tr>
					<tr>
						<td>User Contact</td>
						<td><?php echo $row['admin_contact']; ?></td>
					</tr>
					<tr>
						<td>User Country</td>
						<td><?php echo $row['admin_country']; ?></td>
					</tr>
					<tr>
						<td>User About</td>
						<td><?php echo $row['admin_about']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>


