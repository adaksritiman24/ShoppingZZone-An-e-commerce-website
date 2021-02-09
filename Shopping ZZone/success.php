<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'includes/common.php';
?>
<html>
    <head>
        <title>Order Placed !</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/success-css.css">
    </head>
    <body>
        <div>
            <?php
            include 'includes/header.php';
            ?>
            <div class="container">
                <div class="jumbotron" style="background-color: transparent; margin-top: 80px;">
                    <h1>Your order is confirmed.</h1>
                    <hr>
                    <h3>Thank you for shopping with us!</h3><br>
                    <h4><a href="products.php">Click Here</a> to purchase any other item</h4>
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
