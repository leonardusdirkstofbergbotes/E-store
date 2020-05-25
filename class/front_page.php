<?php 
    class Featured {
        public $conn;

        // Initialize the mysqli OBJECT 
        function __construct($que) {
            $this->conn = new mysqli("","","","");
            $select = "SELECT * FROM products WHERE prod_categ = \"$que\" LIMIT 6";
            $result = $this->conn->query($select);
            while ($data = $result->fetch_assoc()) : ?> 
                <div class="bucket" id="<?php echo $data['prod_id']; ?>"> 
                    <h4><?php echo $data['prod_name'] ?></h4>
                    <img src="./img/products/<?php echo $data['prod_img']; ?>">
                </div>
            
            <?php endwhile;
        }
    }

?>