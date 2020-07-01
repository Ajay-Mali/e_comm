    <div class="container-fluid " id="footer">
        <div class="row mt-4 p-4 ">
            <!-- footer section1 -->
             <div class="col-md-3 col-sm-6" id="f1">
                <h4>Pages</h4>
                 <ol>
                     <li><a href="../card.php">Shopping card</a></li>
                     <li><a href="../contactus.php">Contact Us</a></li>
                     <li><a href="../shop.php">Shop</a></li>
                     <li><a href="my_account.php?my_order">My Account</a></li>
                 </ol>
                 <hr>
                 <h4>User Section </h4>
                 <ul>
                     <li><?php
                                    if (!isset($_SESSION['customer_email'])) {
                                        echo "<a href='../checkout.php'> Login </a>";
                                    }else{
                                        echo "<a href='../logout.php'> Logout </a>";
                                    }
                                 ?></li>
                     <li><a href="../customer_registration.php">Register</a></li>
                </ul>
                <hr>
            </div>

            <!-- footer section2 -->
            <div class="col-md-3 col-sm-6s">
                <h4>Top Product Categories</h4>
                <ul>
                    <!-- <li><a href="#">Jacket</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Coats</a></li>
                    <li><a href="#">T-Shirts</a></li>
                    <li><a href="#">Pantes</a></li> -->
                     <?php
                     $sql = "SELECT * FROM product_categories";
                     $run = $conn->query($sql);
                     while ($row = $run->fetch_array()) {
                        $p_cat_id = $row['p_cat_id'];
                        $p_cat_title = $row['p_cat_title'];
                        echo "<li><a href='../shop.php?pc_id=$p_cat_id'>$p_cat_title</a></li>";
                     }
                    ?>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div>

            <!-- footer section3 -->
            <div class="col-md-3 col-sm-6">
                <h4>Contact Us</h4>
                <p>
                    <strong>Ajmaking.com</strong>
                    <br>Chopda
                    <br>Jalgaon 
                    <br>Maharashtra
                    <br>ajmakig@gmail.com
                    <br>+91 9948527253
                </p>
                <a href="#">Go to contact</a>
            </div>
            
            <!-- footer dection4 -->
            <div class="col-sm-6 col-md-3">
                <!-- get message -->
                <h4>Get Message</h4>
                <p>Subscribe here for getting news of Ajmaking</p>
                <form>
                    <div class="form-group">
                        <span class="input-group-append">
                            <input type="text" name="" class="form-control">          
                            <input type="submit" name="" class="btn btn-success" value="Subscribe">
                        </span>
                    </div>
                </form>

                <!-- social -->
                <div>
                    <h4>Stay In Touch</h4>
                    <p id="icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
            <!--########################### copyright Start ###########################-->
           <div class="container-fluid bg-dark " style="margin: 0; ">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <p class="text-white">Templete By : Ajmaking &copy; 2020</p>
                </div>
                <div class="col-md-6 mt-3">
                    <p class="float-right text-white">
                        Templete by : <a href="#">Ajmaking.com</a>
                    </p>
                </div>
            </div>
        </div>        
        <!--########################### copyright end ##########################-->
       