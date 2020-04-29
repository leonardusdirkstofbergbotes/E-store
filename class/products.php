<?php 
   class Products {

    public $conn;
    const shirt_F = "SELECT * FROM products WHERE prod_categ = 'shirts F'";
    const shirt_M = "SELECT * FROM products WHERE prod_categ = 'shirts M'";
    
    // Initialize the mysqli OBJECT 
    function __construct() {
        $this->conn = new mysqli("localhost:3308","root","","e_store");
    }

    // All female shirts
    function shirt_f() {
        $female_shirts = $this->conn->query(self::shirt_F);
        while ($data = $female_shirts->fetch_assoc()) : ?>
        <div class="product_wrapper" id="<?php echo $data['prod_id']; ?>">
            <h1><?php echo $data['prod_name'] ?></h1>
            <p><?php echo $data['prod_desc'] ?> </p>
            <img src="img/products/<?php echo $data['prod_img']; ?>">
            <b>R <?php echo $data['prod_price']; ?></b>
        </div>
        <?php endwhile; 
    }

    // All male shirts
    function shirt_m() {
        $female_shirts = $this->conn->query(self::shirt_M);
        while ($data = $female_shirts->fetch_assoc()) : ?>
        <div class="product_wrapper" id="<?php echo $data['prod_id']; ?>">
            <h1><?php echo $data['prod_name'] ?></h1>
            <p><?php echo $data['prod_desc'] ?> </p>
            <img src="img/products/<?php echo $data['prod_img']; ?>">
            <b>R <?php echo $data['prod_price']; ?></b>
        </div>
        <?php endwhile; 
    }
}

?>