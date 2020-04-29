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
                <h1><?php echo $data['prod_name'] ?></h1>
                <p><?php echo $data['prod_desc'] ?> </p>
                <img src="./img/products/<?php echo $data['prod_img']; ?>">
                <b>R <?php echo $data['prod_price']; ?></b>
            </div>
            <?php endwhile; 
    }
}

?>