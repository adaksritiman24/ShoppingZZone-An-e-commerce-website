<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
else{    
    $userid = $_SESSION['id'];
    $query = "update user_items set status='Confirmed' where user_id='$userid' ";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn)==0){
        header("location: cart.php");
    }else{
        header("location: success.php");
    }
}
?>