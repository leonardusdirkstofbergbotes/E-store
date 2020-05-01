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
    <div id="hero"></div>
    <div id="wrapper"> <!-- main div wrapper that renders all the products -->
    <?php 
        include "class/front_page.php";
    ?> 
        <b class="categ">Shirts</b>
        <?php $shirts = new Featured('shirts M'); ?>

        <b class="categ">Shoes</b>
        <?php $shoes = new Featured('shoes F'); ?>

        <b class="categ">Hats</b>
        <?php $hats = new Featured('hats F'); ?>

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

            function right() {
                var pos = $(".scroll").scrollLeft();
                $('.scroll').animate( { scrollLeft: '+=700' }, 1500, 'swing' );
            }

            function left() {
                var pos = $(".scroll").scrollLeft();
                $('.scroll').animate( { scrollLeft: '-=700' }, 1500, 'swing' );
                // $(".scroll").scrollLeft(pos - 200)
            }

            

            function select() {
                $.ajax({
                    type: 'post',
                    url: 'queries/select_category.php',
                    data: $("#select_categ").serialize(),
                    success: function(data) {
                        $('#wrapper').empty();
                        $('#wrapper').append(data);
                        document.getElementById('wrapper').scrollIntoView();
                    }
                });event.preventDefault(); 
            }
        
        </script>
</body>
</html>