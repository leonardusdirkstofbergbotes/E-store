<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <script src="script/jquery.js"></script>
</head>
<body>
    
<?php
    include "sections/navbar.php";
    include "sections/sidebar.php";
    include "sections/signup.php"; // signup modal
    include "sections/login.php";  //login modal
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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