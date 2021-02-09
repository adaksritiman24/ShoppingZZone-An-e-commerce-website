<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
else{    
    $itemid = $_GET['id'];
    $userid = $_SESSION['id'];
    $query = "delete from user_items where user_id='$userid' and item_id='$itemid' and status='Added to cart' ";
    $result = mysqli_query($conn, $query);
    header("location: cart.php");
}
?>