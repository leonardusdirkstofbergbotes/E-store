<?php 
    foreach ($_POST as $key => $value) {
        $user_id = $key;
    }
    $total_price = array();
    global $user_id;
    $get_cart = "SELECT * FROM cart WHERE cart.user = \"$user_id\"";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $items = $conn->query($get_cart);
    $count = $items->num_rows;
        
        $num = $count;
        echo "<button id=\"num_items\" disabled>$num</button>";
    echo "<div id=\"cartbox\">";
    if ($items->num_rows > 0) { /* the user has items in the cart */
        
        while ($data = $items->fetch_assoc()) {
            $product = $data['product'];
            $get_product = "SELECT * FROM products WHERE products.prod_id = \"$product\"";
            $products = $conn->query($get_product); /* get the product info from table */ 
            
            while ($prod = $products->fetch_assoc()) : ?>
            <?php 
                $product_price = $prod['prod_price'];
                array_push($total_price, "$product_price"); 
            ?>
                <div id="cart_item">
                    <img src="./img/products/<?php echo $prod['prod_img']; ?>">
                    <p><?php echo $prod['prod_name']; ?></p>
                    <div id="cart_options">
                        <button onclick="delete_item(this)" id="<?php echo $data['product']; ?>"><img class="del" src="./img/icons/delete.png"></button>
                        <b> R <?php echo $prod['prod_price']; ?></b>
                    </div>
                </div>
            <?php endwhile;
            
            
            
        } 
        $total = (array_sum($total_price)); 
        echo $total; 
        echo "</div>";

    } else { /* the user has no items yet */
        echo "</div>";
    }

?>