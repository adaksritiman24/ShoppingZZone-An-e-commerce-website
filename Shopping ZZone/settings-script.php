<?php
    
require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    else{
        $email = $_SESSION['email'];
        $old = md5(mysqli_real_escape_string($conn,$_POST['old-pwd']));
        $new = md5(mysqli_real_escape_string($conn,$_POST['new-pwd']));
        $newr= md5(mysqli_real_escape_string($conn,$_POST['new-pwd-r']));
        if($new==$newr){
            $query="update users set password='$new' where email='$email' and password='$old' ";
            $result = mysqli_query($conn, $query);
            if(mysqli_affected_rows($conn)==0){
                $_SESSION['f']="Failed to update!.";
                unset($_SESSION['p']);
                unset($_SESSION['r']);
                header('location: settings.php');
            } else {
                $_SESSION['p']="Password Changed";
                unset($_SESSION['f']);
                unset($_SESSION['r']);
                header('location: settings.php');
            }
        }else{
            $_SESSION['r']="Re-typed Password donot match with previous entry!";
            unset($_SESSION['p']);
            unset($_SESSION['f']);
            header('location: settings.php');
        }
    }
?>