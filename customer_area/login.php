 <div class="container">
        <div class="card m-3">
            <div class="card-header text-center">
                <h2 class="">Customer Login</h2>
                <p>You Are Already Our Customer.</p>
            </div>
            <div class="card-body p-5">
                <form action="checkout.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1"> Email :</label>
                        <input  required="required" type="email" name="c_email" class="form-control col-md-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 offset-md-1"> Password :</label>
                        <input  required="required" type="Password" name="c_pass" class="form-control col-md-9">
                    </div>
                    <center>
                        <button type="submit" name="submit" class="btn btn-primary mt-2">
                            <i class="fa fa-sign-in mr-1"></i> Login
                        </button>
                    </center>
                </form>
                <center >
                    <h3 class="mt-4">New ? <a href="customer_registration.php">Register Here..</a></h3>
                </center>
            </div>
        </div>
    </div>
<?php
    
    if (isset($_POST['submit'])) {
        $c_email = $_POST['c_email'];
        $c_pass = $_POST['c_pass'];
        $select_c = "SELECT * FROM customers WHERE customer_email = '$c_email' AND customer_pass = '$c_pass'";
        $run=$conn->query($select_c);
        $c_row = $run->fetch_assoc();
        // echo "<pre>";
        // print_r($c_row);
        // echo "</pre>";
        $c_name = $c_row['customer_name'];
        // echo "<script>alert('$c_name')</script>";
        $check_c = mysqli_num_rows($run);
        $get_ip = getUserIp();

        $select_card = "SELECT * FROM card WHERE ip_add = '$get_ip'";
        $run_card = $conn->query($select_card);
        $check_card = mysqli_num_rows($run_card);

        if ($check_c == 0) {
            echo "<script>alert('Wrong Email And Password ')</script>";
            exit();
        }

        if ($check_c == 1 AND $check_card == 0) {
            $_SESSION['customer_email'] = $c_email;
            $_SESSION['customer_name'] = $c_name;
            echo "<script>alert('Your Are Logged in')</script>";
            echo "<script>window.open('customer_area/my_account.php?my_order','_self')</script>";
        }else{
            $_SESSION['customer_email'] = $c_email;
            $_SESSION['customer_name'] = $c_name;
            echo "<script>alert('Your Are Logged in ')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
       

    }

?>