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
    <img src="" id="hero">
<?php 
    include "sections/navbar.php";
    include "sections/sidebar.php"; 
?>
    
    <div id="wrapper">
        

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(".choose").hide();
    $(".hover").hide();
    $("#select_categ").mouseover(function(){
    $(".hover").show(300);
}).mouseleave(function(){ 
    $(".hover").hide(300);
})

$(".hover").click(function(elm){
    $(".choose").toggle(300);
})

    
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