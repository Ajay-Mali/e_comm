  <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                <h2 class="">Change Your Password Account</h2>
            </div>
            <div class="card-body p-5">
                <form method="POST">
                    <div class="form-group ">
                        <label class="">Enter Your Current Password :</label>
                        <input required="" type="password" name="old_pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="">Enter New Password :</label>
                        <input required="" type="password" name="new_pass" class="form-control">
                    </div>
                     <div class="form-group">
                        <label class="">Confirm Password :</label>
                        <input required="" type="password" name="con_new_pass" class="form-control">
                    </div>
                    <center>
                        <button type="submit" name="update_pass" class="btn btn-primary mt-2">
                            <i class="fa fa-user mr-1"></i> Update Now
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['update_pass'])) {
            $c_email = $_SESSION['customer_email'];
            $old_pass = $_POST['old_pass'];
            $new_pass = $_POST['new_pass'];
            $con_new_pass = $_POST['con_new_pass'];

            $check_pass_run = $conn->query("SELECT customer_pass FROM customers WHERE customer_email = '$c_email'");
            $check_pass_row = $check_pass_run->fetch_assoc();
            if ($check_pass_row['customer_pass'] == $old_pass) {
                if ($new_pass == $con_new_pass) {
                    $update_pass_run = $conn->query("UPDATE customers SET customer_pass = '$new_pass'");
                    echo "<script>alert('Your are new password has been Update...')</script>";
                    echo "<script>window.open('my_account.php?change_password','_self')</script>";    
                }else{
                    echo "<script>alert('Your are new password and confirm password not match...')</script>";
                    echo "<script>window.open('my_account.php?change_password','_self')</script>";    
                }
            }else{
                echo "<script>alert('Your Current Password has been wrong...')</script>";
                echo "<script>window.open('my_account.php?change_password','_self')</script>";
            }
        }
    ?>