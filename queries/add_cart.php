<?php
    $user = $_POST['user_id'];
    $prod_id = $_POST['prod_id'];
    $size = $_POST['size'];
    var_dump($_POST);

    $add_cart = "INSERT INTO cart (user, product, size) 
                 VALUES (\"$user\", \"$prod_id\", \"$size\");";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $conn->query($add_cart);
    echo $user;
?>