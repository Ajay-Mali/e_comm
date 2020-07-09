<?php require_once("../includes/db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once('includes/csslinks.php'); ?>
	<link rel="stylesheet" href="includes/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-4 col-md-4" style="margin-top: 10%;">
				<div class="card">
					<div class="card-header">
						<h2 class="text-center">Admin Login</h2>
					</div>
					<div class="card-body">
						<form action="login.php" method="POST">
							<div class="form-group">
								<label>Email :</label>
								<input required="" type="email" name="l_email" class="form-control">
							</div>

							<div class="form-group">
								<label>Password :</label>
								<input required="" type="password" name="l_password" class="form-control">
							</div>

							<div class="form-group">
								<input type="submit" name="login" class="btn btn-success btn-block" value="Login">
							</div>

						</form>
						<a href="forgot_pass.php">Forgot Your Password ?</a>
						<?php
							if (isset($_POST['login'])) {
								$l_email = $_POST['l_email'];
								$l_pass = $_POST['l_password'];
									 echo "<script>alert($l_email $$l_pass)</script>";
								$run = $conn->query("SELECT admin_name FROM admins WHERE admin_email ='$l_email' AND admin_pass='$l_pass'");
								if ($run) {
									$row = $run->fetch_assoc();
									$_SESSION['admin_email'] = $l_email;
						            $_SESSION['admin_name'] = $row['admin_name'];
						            echo "<script>alert('Your Are Logged in')</script>";
						            echo "<script>window.open('main.php?dashboard','_self')</script>";
								}else{
									echo "<script>alert('Wrong Email And Password ')</script>";
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>