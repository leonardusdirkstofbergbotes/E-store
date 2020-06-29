<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nate's Clothing store</title>
    <link rel="shortcut icon" href="./img/icons/favi.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="loader"> <img src="./img/icons/load.gif"> </div>
<?php 
    include "sections/navbar.php";
    include "sections/signup.php"; // signup modal
    include "sections/login.php";  //login modal
    include "sections/show_more_modal.php"; // show_more modal
    include "sections/cartbox.php";
?>
    <div id="hero"></div>
    <div id="header">
        <h1>Get the latest fashion trends in just one website</h1>
        <div><button>Show me</button></div>
    </div> <!-- header ends -->

<img id="to_top" src="./img/icons/back_to_top.png" alt="go back to top"> 
<div id="main_content">
    <?php include "sections/sidebar.php"; ?>
<div id='roll'>
        <img src="./img/icons/choose.png" alt="select here">
    </div>
    <div id="wrapper"> <!-- main div wrapper that renders all the products -->
    <?php 
        include "class/front_page.php";
    ?> 

    <h1>Check out some of our featured products</h1>
        <div class="featured">
            <b class="categ">Shirts</b>
            <div id="scrolla">
                <button onclick="left(this)" id="1"><img src="./img/icons/left.png" alt="scroll left"></button>
                <div class="scroll" id="1">
                    <?php $shirts = new Featured('shirts M'); ?>
                </div>
                <button onclick="right(this)" id="1"><img src="./img/icons/right.png" alt="scroll right"></button>
            </div>
        </div>

        <div class="featured">
            <b class="categ">Shoes</b>
            <div id="scrolla">
                <button onclick="left(this)" id="2"><img src="./img/icons/left.png" alt="scroll left"></button>
                <div class="scroll" id="2">
                    <?php $shoes = new Featured('shoes F'); ?>
                </div>
                <button onclick="right(this)" id="2"><img src="./img/icons/right.png" alt="scroll right"></button>
            </div>
        </div>

        <div class="featured">
            <b class="categ">Hats</b>
            <div id="scrolla">
                <button onclick="left(this)" id="3"><img src="./img/icons/left.png" alt="scroll left"></button>
                <div class="scroll" id="3">
                    <?php $hats = new Featured('hats F'); ?>
                </div>
                <button onclick="right(this)" id="3"><img src="./img/icons/right.png" alt="scroll right"></button>
            </div>   
        </div>

        <h1>Coming soon to Nate's Online store</h1>
        
        <div class="featured">
            <b class="categ">Hats</b>
            <div id="scrolla">
                <button onclick="left(this)" id="3"><img src="./img/icons/left.png" alt="scroll left"></button>
                <div class="scroll" id="3">
                    <?php $hats = new Featured('hats F'); ?>
                </div>
                <button onclick="right(this)" id="3"><img src="./img/icons/right.png" alt="scroll right"></button>
            </div>   
        </div>

    </div> <!--wrapper content ends-->
</div> <!--main content ends-->
    <?php 
        include "sections/footer.php";
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script/ajax.js"></script>
    <script src="./script/functions.js"></script>
    <script src="./script/vue.js"></script>
    
</body>
</html>