<!DOCTYPE html>
<?php
    require 'includes/common.php';
    $current_user = $_SESSION['id'];
    $sum=0;
    $query = "select count(p.id), p.id, p.name, p.price from user_items ui inner join items p on ui.item_id=p.id where ui.user_id='$current_user' and ui.status='Confirmed' group by p.id ";
    $result = mysqli_query($conn, $query);
    
    unset($_SESSION['f']);
    unset($_SESSION['r']);
    unset($_SESSION['p']);
?>
<html>
    <head>
        <title>Your Orders</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src = "bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src = "bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/cart-css.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
                <div class="table-responsive table-style">
                    <h2>Your Orders</h2>
                    <hr>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Item Quantity</th>
                                <th>Price</th>
                                
                            </tr>
                            <?php
                            while($row= mysqli_fetch_array($result)){
                                $sum+= $row[3]*$row[0];
                            ?>
                            <tr>
                                <td><?php echo $row[1];?></td>
                                <td><?php echo $row[2];?></td>
                                <td><?php echo $row[0];?></td>
                                <td><?php echo $row[3]*$row[0];?></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td class="total">Total</td>
                                <td></td>
                                <td class="total"><?php echo"Rs. $sum/-"?></td>
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
    </body>
</html>
