<?php
require 'includes/common.php';

$email = mysqli_real_escape_string($conn, $_POST['email']); 
$pwd = md5(mysqli_real_escape_string($conn, $_POST['password']));//change to encrypted

$query = "select id, email, name from users where email='$email' and password='$pwd'";
$query_result = mysqli_query($conn, $query) or die (mysqli_error($conn));

if(mysqli_num_rows($query_result)==0){
    $_SESSION['invalid']= 'Incorrect username or password';
    header("location: login.php");
}else{
    $row = mysqli_fetch_array($query_result);
    $_SESSION['email']= $row['email'];
    $_SESSION['id']=$row['id'];
    $_SESSION['n']=$row['name'];
    unset($_SESSION['invalid']);
    header("location: products.php");
}
?>