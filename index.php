<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="wrapper">
        <form id="select_categ">
            <label>Category</label><br>
            <label>Hats M</label>
            <input type="radio" name="prod_categ" value="hats M"><br>
            <label>Hats F</label>
            <input type="radio" name="prod_categ" value="hats F"><br>
            <label>shirts M</label>
            <input type="radio" name="prod_categ" value="shirts M"><br>
            <label>shirts F</label>
            <input type="radio" name="prod_categ" value="shirts F"><br>
            <label>Pants M</label>
            <input type="radio" name="prod_categ" value="pants M"><br>
            <label>Pants F</label>
            <input type="radio" name="prod_categ" value="pants F"><br>
            <label>Shoes M</label>
            <input type="radio" name="prod_categ" value="shoes M"><br>
            <label>Shoes F</label>
            <input type="radio" name="prod_categ" value="shoes F"><br>
            <button type="submit" onclick="select()"> Select </button>
        </form>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
 function select() {
     $.ajax({
         type: 'post',
         url: 'select_category.php',
         data: $("#select_categ").serialize(),
         success: function(data) {
            $('#wrapper').append(data);
         }
     });event.preventDefault(); 
 }
   
</script>
</body>
</html>