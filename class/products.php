<?php 
   class Products {

    public $conn;

    // Initialize the mysqli OBJECT 
    function __construct() {
        $this->conn = new mysqli("localhost:3308","root","","e_store");
    }

    function select($var) {
        $result = $this->conn->query($var);
        while ($data = $result->fetch_assoc()) : ?>
            <div class="product_wrapper" id="<?php echo $data['prod_id']; ?>">
                <b id="price">R <?php echo $data['prod_price']; ?></b>
                <p class="describe"><?php echo $data['prod_desc'] ?> </p>
                <img src="./img/products/<?php echo $data['prod_img']; ?>">
                <div class="buttons">
                    <input type="text" name="user_size" id="choosesize">
                    <button class="info" data-target="#show_more_modal" data-toggle="modal" onclick="show_more(this)" id="<?php echo $data['prod_id']; ?>" >Show info</button>
                    <button type="submit" class="add" onclick="add_to_cart(this)" id="<?php echo $data['prod_id']; ?>">Add to Cart</button>
                </div>
            </div>
            <?php endwhile; 
    }
}

?>

<!-- Trigger login modal -->
<!-- <button type="button" data-toggle="modal" data-target="#show_more_modal"> -->
                    
                