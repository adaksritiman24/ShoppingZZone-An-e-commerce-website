<?php
require 'includes/common.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = md5(mysqli_real_escape_string($conn, $_POST['pwd'])); //password encryption
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($conn, $_POST['city']);
$addr = mysqli_real_escape_string($conn, $_POST['addr']);

$query_email = "select * from users where email='$email'";
$submit_query_email = mysqli_query($conn, $query_email);

if(mysqli_num_rows($submit_query_email)>0){
    $_SESSION['eaiu'] = 'This email is already in use!';
    header("location: signup.php");
}

else{
    $query = "insert into users (name, email, password, contact, city,address) values ('$name','$email','$pwd','$contact','$city','$addr')";
    unset($_SESSION['eaiu']);
    //die($query);
    $submit_registration = mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo 'User successfully inserted';

    $_SESSION['email'] = $email;
    $_SESSION['n']=$name;
    $_SESSION['id'] = mysqli_insert_id($conn);//recently created id
//    echo $_SESSION['id'];
    header("location: products.php");
}
?>