<?php 
    $item = $_POST['item_no'];
    $user = $_POST['user_id'];
    
    $delete_item = "DELETE FROM cart WHERE user = \"$user\" AND product = \"$item\"";
    include "../db/dbconnect.php";
    $conn->query($delete_item);
?>