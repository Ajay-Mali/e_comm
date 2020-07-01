  <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                <h2 class="">Do you reall want to delete your account</h2>
            </div>
            <div class="card-body p-5">
                <form method="post">
                    <center>
                    	<button type="submit" name="del" class="btn btn-danger">Yes, I want To Delete </button>
                        <a href="my_account.php?my_order" class="btn btn-success">No, I Don`t want </a>
                    </center>
                </form>
                <?php
                    if (isset($_POST['del'])) {
                        $s_email = $_SESSION['customer_email'];
                       //$run = $conn->query("DELETE FROM customers WHERE customer_email = '$s_email' ");
                       if ($conn->query("DELETE FROM customers WHERE customer_email = '$s_email' ")) {
                           echo "<script>window.open('logout.php','_self')</script>";
                       }else{
                        echo "<script>alert('check yuer query')</script>";
                       }
                    }
                ?>
            </div>
        </div>
    </div>