<?php 
    $item = $_POST['item_no'];
    $user = $_POST['user_id'];
    
    $delete_item = "DELETE FROM cart WHERE user = \"$user\" AND product = \"$item\"";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $conn->query($delete_item);
?>