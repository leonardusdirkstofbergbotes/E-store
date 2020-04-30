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
    <div id="wrapper">
        

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(".choose").hide();
    $("#select_categ").mouseover(function(){
    $(".choose").show(300);
    }).mouseleave(function() {
        $(".choose").hide(300);
    })

    
 function select() {
     $.ajax({
         type: 'post',
         url: 'queries/select_category.php',
         data: $("#select_categ").serialize(),
         success: function(data) {
    //        var splitted = data.split("|");
    // document.write(splitted);

            $('#wrapper').empty();
            $('#wrapper').append(data);
         }
     });event.preventDefault(); 
 }
   
</script>
</body>
</html>