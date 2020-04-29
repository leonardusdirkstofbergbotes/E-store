<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .wrapper {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .product_wrapper {
            width: 400px;
            height: 400px;
            margin: 10px;
            border: 1px solid grey;
        }

        .product_wrapper > img {
            width: 250px;
            height: 250px;
        }
    </style>
</head>
<body>
        <div class="wrapper">
<?php 
    include "class.php";
    $new = new Products();
    $new->shirt_f();
?>
    </div>
</body>
</html>