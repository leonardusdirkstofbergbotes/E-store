<?php 
    if(isset($_GET['session'])) {
        session_start();
    } else {
    echo "session doesn't exist";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online store</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
<?php
    include "sections/navbar.php";
    include "sections/sidebar.php";
    include "sections/signup.php"; // signup modal
    include "sections/login.php";  //login modal
    include "sections/cartbox.php";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./script/functions.js"></script>
        <script>
         
    var user_id = "<?php if (isset($_SESSION)) {echo $_SESSION['user_id'];} else {echo "none";} ?>";
    console.log(user_id);          
    $.ajax({
        type: 'post',
        url: 'queries/cart.php',
        data: user_id,
        success: function(data) {
            $("#cart_content").empty();
            $("#cart_content").append(data);
        }
    })

    function add_to_cart(elmnt) {
            var id = elmnt.id;
            var user_id = "<?php if (isset($_SESSION)) {echo $_SESSION['user_id'];} else {echo "none";} ?>";
            $.ajax({
                type: 'post',
                url: 'queries/add_cart.php',
                data: {prod_id: id},
                success: function() {
                    $.ajax({
                        type: 'post',
                        url: 'queries/cart.php',
                        data: user_id,
                        success: function(data) {
                            $("#cart_content").empty();
                            $("#cart_content").append(data);
                        }
                    })
                }
            })
        }


        function signupForm(){
	 $.ajax({
		type: "POST",
		url: "queries/create_user.php",
		data: $('form#signup_form').serialize(),
		success: function(data){
            $("#close_signup").click()
            // $("#contact-modal").modal('toggle');
            if (data == "created") {
                alert('well done');
            } else if (data == "exists") {
                alert('already exists');
            }
		},
		error: function(){
			alert("Error");
		}
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
                        document.getElementById('wrapper').scrollIntoView();
                    }
                });event.preventDefault(); 
            }

        

    


            
        
        </script>
</body>
</html>