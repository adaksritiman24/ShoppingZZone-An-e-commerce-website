<?php
require 'includes/common.php';
$userid = $_SESSION['id'];
$itemid = $_GET['id'];
$query = "insert into user_items(user_id,item_id,status) values ($userid,$itemid,'Added to cart')";
$insert_query = mysqli_query($conn, $query) or die("Error!");
header("location: products.php");
?>