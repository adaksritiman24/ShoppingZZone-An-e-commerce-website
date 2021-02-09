<?php
echo"<style>.th-style {
                width: 30px;
                height: 30px;
                margin: auto;
                margin-top: 10px;
                margin-left: 6px;
                margin-right: 6px;
                display: inline;
                float: left;
            }
           .main-nav-style{
                display: flex;
            } 
            .modal-header h3{
                display:inline;
                color: white;
                font-weight:bold;
            }
            .header-style{
                background-color:  #337ab7;
            }
            .nav-color{
                background-color: rgb(100,5,45);
            }
</style>";
?>
<nav class="navbar navbar-inverse navbar-fixed-top nav-color">
    <div class="container">
        <div class="navbar-header main-nav-style">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#options">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div>
                <a href="#"><img src="img/logo.png" class="th-style" alt="NF"></a>
            </div>
            <?php
            if (isset($_SESSION['email'])) {
                ?>
                <a href="#" class="navbar-brand nav-animate">Shopping ZZone</a>
                <?php
            } else {
                ?>
                <a href="index.php" class="navbar-brand nav-animate">Shopping ZZone</a>
                <?php
            }
            ?>
        </div>
        <div class="collapse navbar-collapse" id="options">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li>
                        <a href="cart.php"><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a>
                    </li>
                    <li>
                        <a href="orders.php"><span class='glyphicon glyphicon-ok-circle'></span> Orders</a>
                    </li>
                    <li>
                        <a href="settings.php"><span class='glyphicon glyphicon-user'></span> Settings</a>
                    </li>
                    <li>
                        <a href="products.php"><span class='glyphicon glyphicon-home'></span> Shop</a>
                    </li>
                    <li>
                        <a href="logout-session.php"><span class='glyphicon glyphicon-log-out'></span> Logout</a>
                    </li>
                    <li>
                        <a href="contact-page.php"><span class='glyphicon glyphicon-phone'></span> Contact Us</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a href="signup.php"><span class='glyphicon glyphicon-user'></span> Sign Up</a>
                    </li>
                    <li>
                        <a href="login.php" type="button"><span class='glyphicon glyphicon-log-in'></span> Login</a>
                    </li>
                    <li>
                        <a href="contact-page.php"><span class='glyphicon glyphicon-phone'></span> Contact Us</a>
                    </li>
                    <?php
                }
               ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<!--
<div class="modal fade" id="login-modal" tabindex="+1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header header-style">
                <h3 class="modal-title" id="exampleModalLabel">LOGIN</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        <p><i>Login to make a purchase</i></p>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control" required="true">
                            </div>  
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" required="true">
                            </div>                             
                            <input name="submit" class="btn btn-primary"  type="submit" value="Submit">
                        </form>
                        
                        <?php
                        /*
                            if(isset($_POST['submit'])){
                                $email = mysqli_real_escape_string($conn, $_POST['email']); 
                                $pwd = md5(mysqli_real_escape_string($conn, $_POST['password']));//change to encrypted
//
                                $query = "select id, email, name from users where email='$email' and password='$pwd'";
                                $query_result = mysqli_query($conn, $query) or die (mysqli_error($conn));
//
                                if(mysqli_num_rows($query_result)==0){
                                    echo"<center style='color:red;'>";
                                    echo "Invalid username or password !";
                                    echo"</center>";
//                                    //header("location: login.php");
                                }else{
                                    $row = mysqli_fetch_array($query_result);
                                    $_SESSION['email']= $row['email'];
                                    $_SESSION['id']=$row['id'];
                                    $_SESSION['n']=$row['name'];
//                                    //unset($_SESSION['invalid']);
                                    header("Location: products.php");
                                }
                            }
                         */
                        ?>
             </div>
            <div class="modal-footer">
                Don't have an account?<a href="signup.php"><b> Register</b></a>
            </div>
        </div>
    </div>
</div>

-->