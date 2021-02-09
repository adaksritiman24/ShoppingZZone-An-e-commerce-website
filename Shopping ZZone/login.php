<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'includes/common.php';
    unset($_SESSION['eaiu']);
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/login-css.css">
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
            <div class="container">
                <center class='imstyle'>
                    <img src="img/login.png">
                </center>
                <div class="row row-style ">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LOGIN</div>
                            <div class="panel-body">
                                <p><i>Login to make a purchase</i></p>
                                <form method="post" action="login-submit.php">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>  
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>                             
                                    <button class="btn btn-primary", type="submit">
                                    Login
                                    </button>
                                </form>
                                
                            </div>
                            <div class="panel-footer">
                                Don't have an account?<a href="signup.php"><b> Register</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <center style="color: red;">
                            <?php
                            if(isset($_SESSION['invalid'])) {
                                echo $_SESSION['invalid'];
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
