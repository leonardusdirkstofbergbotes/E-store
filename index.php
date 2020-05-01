<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="script/jquery.js"></script>
</head>
<body>
    
<?php
    include "sections/navbar.php";
    include "sections/sidebar.php"; 
?>
    <img src="" id="hero">
    <div id="wrapper"> <!-- main div wrapper that renders all the products -->
    <?php 
        include "class/front_page.php";
    ?> 
        <div class="scroll">
        <button onclick="previous()">Previous</button>
                <button onclick="next()">Next</button>
        <b>Shirts</b>
           <?php $shirts = new Featured('shirts M'); ?>
        </div>

        <div class="scroll">
        <b>Shoes</b>
            <?php $shoes = new Featured('shoes F'); ?>
        </div>

        <div class="scroll">
        <b>Hats</b>
            <?php $hats = new Featured('hats F'); ?>
        </div>
    </div>

    <?php 
        include "sections/footer.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            $(".choose").hide();
            $("#select_categ").mouseover(function(){
            $(".choose").show(300);
            }).mouseleave(function() {
                $(".choose").hide(300);
            })

            function previous() {
                window.scrollTo(300, 0);
            }

            function next() {
                window.scrollBy({
                top: 100,
                left: 100,
                behavior: 'smooth'
                });
            }

            function select() {
                $.ajax({
                    type: 'post',
                    url: 'queries/select_category.php',
                    data: $("#select_categ").serialize(),
                    success: function(data) {
                        $('#wrapper').empty();
                        $('#wrapper').append(data);
                    }
                });event.preventDefault(); 
            }
        
        </script>
</body>
</html>