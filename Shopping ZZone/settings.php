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
        <title>Settings</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/settings-css.css">
    </head>
    <body>
        <div>
            <?php
            include 'includes/header.php';
            ?>
            <div class=" container">
                <div class="row row-style">
                    <div class=" col-sm-6 col-sm-offset-3">
                        <form method="post" action="settings-script.php">
                            <h2>Change Password</h2>
                            <div class="form-group">
                                <input type="password" name="old-pwd" class=" form-control" placeholder="Old Password" pattern=".{6,}" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" name="new-pwd" class=" form-control" placeholder="New Password" pattern=".{6,}" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" name="new-pwd-r" class=" form-control" placeholder="Re-type New Password" pattern=".{6,}" required="true">
                            </div>
                            <button class="btn btn-primary" type="submit">
                                Change
                            </button>
                        </form>
                    </div>
                    <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                            <?php
                            if(isset($_SESSION['f'])) {
                                ?>
                                <center style="color: red;">
                                <?php echo $_SESSION['f'];?>
                                </center>
                           <?php
                            }else if(isset($_SESSION['p'])) {
                                ?>
                                <center style="color: green;">
                                <?php echo $_SESSION['p'];?>
                                </center>
                             <?php
                            } else if(isset($_SESSION['r'])) {
                                ?>
                                <center style="color: red;">
                                <?php echo $_SESSION['r'];?>
                                </center>
                            <?php
                            }
                            ?>
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
