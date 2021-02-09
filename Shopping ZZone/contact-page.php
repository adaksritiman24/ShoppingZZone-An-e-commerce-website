<?php
require 'includes/common.php';
unset($_SESSION['invalid']);
unset($_SESSION['eaiu']);
unset($_SESSION['f']);
unset($_SESSION['r']);
unset($_SESSION['p']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/contact-css.css">
    </head>
    <body>
        <?php
            include 'includes/header.php';
            ?>
        <div class="container">
            <div class="row row-style">
                <div class="col-md-2"><center><img src="img/contact.png" alt="Not Found!"></center></div>
                <div class="col-md-10">
                    <h2>LIVE SUPPORT</h2>
                    <p class="mkdv">24 hours | 7 days a week | 365 days in a year Live Technical Support</p>
                    <p>We are completed dedicated to our customer satisfaction. If you have any query or faced any problem/ambiguities while shopping through
                    our web site or regarding deliver of your product, please feel free to contact us. Well will try to address your problem as soon as possible. We are available 24 hours. Also please help our
                    company grow by following us on twitter and facebook. This is a small request from our side. We are extremely happy to serve you. Wishing you happy shopping!</p>
                </div>   
            </div>
            
            <div class="row bottom-row">
                <div class="col-md-7 cii">
                    <form>
                        <h2>CONTACT US</h2>
                        <div class="form-group">
                            <h5>Name:</h5>
                            <input type="textarea" class="form-control">
                        </div>
                        <div class="form-group">
                            <h5>Email:</h5>
                            <input type="textarea" class="form-control">
                        </div>
                        <div class="form-group">
                            <h5>Message:</h5>
                            <textarea rows="6" class="text-area-style"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary btnstyle">
                    </form>
                </div>
                <div class="col-md-5 ci">
                    <h2>Company Information:</h2>
                    <p>22 Surya Sen Pally, Haridevpur, Kolkata</p>
                    <p>pin: 700082</p>
                    <p>India</p>
                    <p>Phone: (00)222 666 444</p>
                    <p>Fax: (000) 000 00 0</p>
                    <p>Email: sritiman@shoppingzzone.co.in</p>
                    <p>Follow on: Facebook, Twitter</p>
                    <div class="row">
                        <div class="col-md-6 logo"><a href="#"><center><img src="img/fb.png" alt="not found" class="cor"></center><p>Shopping ZZone official</p></a></div>
                        <div class="col-md-6 logo"><a href="#"><center><img src="img/twitter.png" alt="not found" class="cor"></center><p>@sZZoneIndia</p></a></div>
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
    </body>
</html>