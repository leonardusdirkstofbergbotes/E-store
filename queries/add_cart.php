<?php
    $user = $_POST['user_id'];
    $prod_id = $_POST['prod_id'];

    $add_cart = "INSERT INTO cart (user, product, size, quantity) 
                 VALUES (\"$user\", \"$prod_id\", 'm', \"1\");";
    include "../db/dbconnect.php";
    $conn->query($add_cart);
    echo $user;
?>