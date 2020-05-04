<?php 
    $prod_id = $_POST['prod_id'];
    $get_prod = "SELECT * FROM products WHERE products.prod_id = \"$prod_id\"";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');

    $result = $conn->query($get_prod);
    $data = $result->fetch_assoc();

?>