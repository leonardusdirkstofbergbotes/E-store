<?php 
    $prod_id = $_POST['prod_id'];
    $get_prod = "SELECT * FROM products WHERE products.prod_id = \"$prod_id\"";
    include "../db/dbconnect.php";

    $result = $conn->query($get_prod);
    while($data = $result->fetch_assoc()) : ?> <!-- query results gets rendered inside a modal -->
        <div id="modal_content">
                <img src="./img/products/<?php echo $data['prod_img']; ?>" alt="enlarged product view">
        </div>
    <?php endwhile;
?>