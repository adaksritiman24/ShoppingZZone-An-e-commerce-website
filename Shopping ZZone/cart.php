<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'includes/common.php';
    $current_user = $_SESSION['id'];
    $sum=0;
    $query = "select p.id, p.name, p.price from user_items ui inner join items p on ui.item_id=p.id where ui.user_id='$current_user' and ui.status='Added to cart' ";
    $result = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>Your Cart</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/cart-css.css">
    </head>
    <body>
        <div>
            <?php
            include 'includes/header.php';
            unset($_SESSION['f']);
                unset($_SESSION['r']);
                unset($_SESSION['p']);
            ?>
            <div class="container">
                <div class="table-responsive table-style">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            <?php
                            while($row= mysqli_fetch_array($result)){
                                $sum+= $row[2];
                            ?>
                            <tr>
                                <td><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
                                <td><a href=<?php echo "cart-remove.php?id=$row[0]"?> class='btn btn-danger btn-block rm-style'>Remove</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td><?php echo"Rs. $sum/-"?></td>
                                <td>
                                    <a href="confirm-order.php"class=" btn btn-primary active btn-block">Confirm Order</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
