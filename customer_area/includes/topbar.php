        <div id="top"> <!-- top bar start-->
            <div class="container"> 
                <div class="row">
                    <div class="col-md-6 offer"> <!-- col-1 start-->
                        <a href="#" class="btn btn-success btn-sm">
                        <?php 
                        if (!isset($_SESSION['customer_email'])) {
                            echo "Welcome Guest";
                        }else{
                            echo "Welcome ".$_SESSION['customer_name'];
                        }
                        ?>
                        </a>
                        <a href="#" class=""> Shopping card Total Price: INR <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
                    </div> <!-- col-1 End-->

                    <div class="col-md-6 "> <!-- col-2 start-->
                        <ul class="menu">
                            <li><a href="../customer_registration.php">Register</a></li>
                            <li> 
                                <?php
                                    if(!isset($_SESSION['customer_email']))
                                    {
                                        echo "<a href='../checkout.php'>My Account</a>";
                                    }else{
                                        echo "<a href='my_account.php?my_order'>My Account</a>";
                                    }
                                  ?>
                                      
                          </li>
                            <li><a href="../card.php">Go To Card</a></li>
                            <li><?php
                                if (!isset($_SESSION['customer_email'])) {
                                    echo "<a href='../checkout.php'>Login</a>";
                                }else{
                                    echo "<a href='../logout.php'>Logout</a>";
                                }
                            ?></li>
                        </ul>
                    </div> <!-- col-2 End-->
                </div>
            </div>
        </div> <!-- top bar end -->