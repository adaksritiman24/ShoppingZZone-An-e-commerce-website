<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/common.php';
//    echo $_SESSION['id'];
?>
<html>
    <head>
        <title>Welcome <?php echo $_SESSION['n'] ?></title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/products-css.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    </head>
    <body>
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
        <div id="main-container">
            <?php
            include 'includes/header.php';
            include 'includes/check-if-added.php';
            unset($_SESSION['f']);
            unset($_SESSION['r']);
            unset($_SESSION['p']);
            ?>
            <div class="container con-style">
                <div class="jumbotron jumbo-style">
                    <h1 style="text-align:center; color: #000;">Welcome to Shopping ZZone!</h1>
                    <p style="text-align:center;">We have the best cameras, watches, shirts for you. No need to hunt around, we have all in one place.</p>
                </div>

                <!--//banner-->
                <div class="row text-center">
                    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                        <div class="thumbnail add">
                                <img src="img/Banner.png">
                        </div>
                    </div>
                </div>
                <!--Cameras-->
                <hr>
                <h2 style="text-align: center; font-weight: bold;">Cameras</h2>
                <div class="row text-center row-style">
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/5.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Cannon EOS</h3>
                                <p>Price: Rs.36000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(1, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=1"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>    
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/4.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>Price: Rs.50000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(4, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=4"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Nikon DSLR</h3>
                                <p>Price: Rs.40000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(2, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=2"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/2.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs.45000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(3, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=3"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                </div>


                <!-- watches-->
                <hr>
                <h2 style="text-align: center; font-weight: bold;">Watches</h2>
                <div class="row text-center row-style">
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/9.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Titan Model #301</h3>
                                <p>Price: Rs.13000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(5, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=5"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/12.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Faber Luba #111</h3>
                                <p>Price: Rs.18000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(8, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=8"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/11.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price: Rs.8000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(7, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=7"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Titan Model #201</h3>
                                <p>Price: Rs.3000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(6, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=6"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                </div>



                <!--shirts-->
                <hr>
                <h2 style="text-align: center; font-weight: bold;">Shirts</h2>

                <div class="row text-center row-style">
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/19.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>H&W</h3>
                                <p>Price: Rs.800.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(9, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=9"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/6.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price: Rs.1000.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(10, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=10"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/14.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>Price: Rs.1300.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(12, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=12"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>John Zok</h3>
                                <p>Price: Rs.1500.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(11, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=11"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                </div>

                <!--Shoes-->
                <hr>
                <h2 style="text-align: center; font-weight: bold;">Shoes</h2>

                <div class="row text-center row-style">
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/15.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Giesswein Merino</h3>
                                <p>Price: Rs.10141.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(13, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=13"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/16.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Allen Solly</h3>
                                <p>Price: Rs.999.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(14, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=14"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/17.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Woakers</h3>
                                <p>Price: Rs.659.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(15, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=15"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="col-style">
                            <div class="thumbnail">
                                <img src="img/18.jpg" alt="Image not found">
                            </div>
                            <div class="caption">
                                <h3>Mactree</h3>
                                <p>Price: Rs.1299.00</p>
                                <?php
                                if (!isset($_SESSION['email'])) {
                                    ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                    <?php
                                } else {
                                    if (check_if_added(16, $_SESSION['id'])) {
                                        ?>
                                        <p><a href="#" role="button" class="btn btn-success btn-block" disabled>Added to Cart</a></p>
                                        <?php
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=16"  name='add' value='add' role="button" class="btn btn-primary btn-block active">Add to Cart</a></p>
                                        <?php
                                    }
                                }
                                ?>   
                            </div>
                        </div>    
                    </div>
                </div>


            </div>
            <footer class="footer-element">
                <p>
                    Copyright © Shopping ZZone. All Rights
                    Reserved | Contact Us: +91 90000 00000
                </p>
            </footer>
        </div>

    </body>
</html>
