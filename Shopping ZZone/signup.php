<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'includes/common.php';
    unset($_SESSION['invalid']);
?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/signup-css.css">
        <style>
            .imstyle{
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <div id="main-container">
            <?php
            include 'includes/header.php';
            ?>
            <div class="container-fluid">
                <!--logo-->
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div>
                        <center>
                            <img src="img/sign.png" alt="Sign up" class="img-responsive imstyle">
                        </center>
                    </div>
                </div>
                <div class="row row-style">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form method="post" action="user-registration-script.php">
                            <h2>SIGN UP</h2>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pwd" class="form-control" placeholder="Password(Should be atleast 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="tel" pattern="[0-9]{10}" name="contact" class="form-control" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" name="addr" class="form-control" placeholder="Address" required="true">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary btn-a">
                        </form>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <center style="color: red;">
                            <?php
                            if(isset($_SESSION['eaiu'])) {
                                echo $_SESSION['eaiu'];
                            }
                            ?>
                        </center>
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
