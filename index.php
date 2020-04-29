<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include "sections/navbar.php"; ?>
    <div id="wrapper">
        

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
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