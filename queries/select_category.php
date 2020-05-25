<?php 
    foreach ($_POST as $key => $value) {
        $input = $key;
    }

    global $input;
    $pick = str_replace('_', ' ', $input);

    $query = "SELECT * FROM products WHERE prod_categ = \"$pick\"";

    include "../class/products.php";
    $new = new Products();
    $new->select($query);

?>