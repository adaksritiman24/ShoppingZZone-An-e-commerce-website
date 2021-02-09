<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'includes/common.php';
    unset($_SESSION['invalid']);
    unset($_SESSION['eaiu']);
    unset($_SESSION['f']);
    unset($_SESSION['r']);
    unset($_SESSION['p']);
?>
<html>
    <head>
        <title>Shopping ZZone</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/index-css.css">
    </head>
    <body>
        <div id="main-container">
            <?php
            include 'includes/header.php';
            ?>
            <div id="banner-image">
                <center>
                    <div class="banner-content">
                        <h2>Welcome to Shopping ZZone</h2>
<!--                        <div class="marquee">
                            <div>
                                <span>Get the best offers on premium brands. Hurry up!</span>
                            </div>
                        </div>-->
                        <p>Flat 40% off on all products!</p>
                        <a href="login.php" class="btn btn-danger btn-lg active" type="button" >Shop Now</a>
                    </div>
                </center>    
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
