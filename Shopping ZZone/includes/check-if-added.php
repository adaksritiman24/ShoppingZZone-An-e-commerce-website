<?php
function check_if_added($item_id,$user_id){
     $conn = mysqli_connect('localhost','root',"","store") or die(mysqli_error($conn));
    $query= "select * from user_items where item_id='$item_id' and user_id='$user_id' and status='Added to cart' ";
    $results = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($results);
    if($rows>0){
        return 1;
    }else{
        return 0;
    }
}
?>