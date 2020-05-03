<?php 
    foreach ($_POST as $key => $value) {
        $user_id = $key;
    }
    global $user_id;
    $get_cart = "SELECT * FROM cart WHERE cart.user = \"$user_id\"";
    $conn = new mysqli('localhost:3308', 'root', '', 'e_store');
    $items = $conn->query($get_cart);
    if ($items->num_rows > 0) { /* the user has items in the cart */
        while ($data = $items->fetch_assoc()) {
            $product = $data['product'];
            $get_product = "SELECT * FROM products WHERE products.prod_id = \"$product\"";
            $products = $conn->query($get_product); /* get the product info from table */ 
            
            while ($prod = $products->fetch_assoc()) : ?>
                <div>
                    <h1><?php echo $prod['prod_name']; ?></h1>
                </div>
            <?php endwhile; 
        }

    } else { /* the user has no items yet */

    }

?>