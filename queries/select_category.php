<?php 
    $input = $_POST['prod_categ'];
    $query = "SELECT * FROM products WHERE prod_categ = \"$input\"";

    include "../class/products.php";
    $new = new Products();
    $new->select($query);

?>