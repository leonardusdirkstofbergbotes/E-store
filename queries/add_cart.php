<?php
    $user = $_POST['user_id'];
    $prod_id = $_POST['prod_id'];

    $add_cart = "INSERT INTO cart (user, product, size) 
                 VALUES (\"$user\", \"$prod_id\", 'm');";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $conn->query($add_cart);
    echo $user;
?>