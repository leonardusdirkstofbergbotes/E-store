<?php 
    class Featured {
        public $conn;

        // Initialize the mysqli OBJECT 
        function __construct($que) {
            $this->conn = new mysqli("localhost:3308","root","","e_store");
            $select = "SELECT * FROM products WHERE prod_categ = \"$que\" LIMIT 6";
            $result = $this->conn->query($select);
            while ($data = $result->fetch_assoc()) : ?>
                <div class="bucket" id="<?php echo $data['prod_id']; ?>">
                    <h1><?php echo $data['prod_name'] ?></h1>
                    <img src="./img/products/<?php echo $data['prod_img']; ?>">
                </div>
            <?php endwhile;
        }
    }

?>