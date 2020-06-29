<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="shortcut icon" href="../img/icons/favi.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<img id="to_top" src="../img/icons/back_to_top.png" alt="go back to top">
<nav>
    <div id="navi">
    <a href="../index.php"><img src="../img/icons/logo.png" id="logo" alt="Nate's Clothing logo"></a>
        <img src="../img/icons/down.png" id="down_button" alt="Click me">
        <a href="about.php" id="ab1">About us</a>
        <a href="contact.php" id="ab2">Contact us</a>
        <div id="login_register">  <!-- Login and register buttons -->
             
            <!-- Trigger login modal -->
            <div id='condi'>
                <button v-if="name == undefined" type="button" id="login" data-toggle="modal" data-target="#login_modal">
                    Login
                </button>

                <!-- Trigger signup modal -->
                <button v-if="name == undefined" type="button" id="register" data-toggle="modal" data-target="#signup_modal">
                        Register
                </button>
                <template v-if="name != undefined"> <!-- only gets rendered once the user has signed in -->
                    <div id="signed">
                        <a href="index.php">Logout</a>
                        <p>{{name}}</p>
                    </div>
                </template>
            </div>

        </div>
        <button id="cart"><img src='../img/icons/cart.png' alt="Click to view cart items"></button>
    <div>
</nav>

<div id="dropdown">
        <a href="about.php">About us</a>
        <a href="contact.php">Contact us</a>
    </div>
    

    <!-- Register modal -->
<div id="signup_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Register</h2>
			</div>
			<form id="signup_form" name="contact" role="form">
				<div class="modal-body">				
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" v-model="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
						<label for="surname">Surname</label>
						<input type="text" v-model="surname" name="surname" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" v-model="email" name="email" class="form-control" minlength="6">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" v-model="pass1" name="password" class="form-control" pattern=".{6,}">
					</div>
					<div class="form-group">
						<label for="password2">Confirm password</label>
						<input type="password" v-model="pass2" name="password2" class="form-control" pattern=".{6,}">
					</div>							
				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal" id="close_signup">Close</button>
					<button type="submit" onclick="signupForm()">Register</button>
				</div>
			</form>
		</div>
	</div>
</div> <!-- Signup ends -->

<!-- Login Modal -->
<div id="login_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Login</h2>
			</div>
			<form id="login_form" name="contact" role="form">
				<div class="modal-body">				

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" v-model="email" :title="[email.length <=5 ? 'Must contain atleast 6 characters including an @ symbol' : '']" name="email" class="form-control" minlength="6" required>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" v-model="pass" :title="[pass.length <=5 ? 'Must have atleast 6 characters' : '']" name="password" class="form-control" pattern=".{6,}" required>
					</div>	

				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal" id="close_login">Close</button> <!-- Closes the modal -->
					<button type="submit" onclick="login()" id="submit" :class="[email.length >= 6 && pass.length >= 6 ? 'light_pri_button' : 'light_sec_button']" :disabled="email.length < 6 && pass.length < 6">login</button>
				</div>
			</form>
		</div>
	</div>
</div> <!-- Login ENds -->

<div class="gallery">

<?php 
	require "../db/dbconnect.php";
	$query = "SELECT * FROM products";
	$result = $conn->query($query);
	while ($data = $result->fetch_assoc()) : ?>
		<div class="gallery_image_Wrapper" id="<?php echo $data['prod_id']; ?>">
			<img src="../img/products/<?php echo $data['prod_img']; ?>">
		</div>
	<?php endwhile; 
?>

</div>

<div id="footy_header">
    <a href="#"><img src="../img/icons/facebook.png" alt="goto facebook"></a>
    <a href="#"><img src="../img/icons/twitter.png" alt="goto twitter"></a>
    <a href="#"><img src="../img/icons/email.png" alt="send email"></a>
</div>

<div id="footy">

    <div id="A"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.314033748079!2d19.007320314346202!3d-34.34248498052796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcdd9dccaf23b01%3A0xd99af027e1e23165!2s21%20Neethling%20St%2C%20Kleinmond%2C%207195!5e0!3m2!1sen!2sza!4v1588096270841!5m2!1sen!2sza" 
        width="100%" height="100%" id="maps" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>   
        
    </div>
    <!-- A ends -->

    <div id="B">
        <div id="branch_info">
            <h3>Visit our branch</h3>
            <p>Cape Town, South Africa</p>
            <p>21 Neethling st</p>
            <p>7430</p>
        </div>
        <p></p>
        <p></p>
        <div id="trading">
            <h3>Trading hours</h3>
            <pre>Mon - Fri:     08:00 - 16:00</pre>
            <pre>Sat:           09:00 - 13:00</pre>
            <pre>Sun:           Closed</pre>
        </div>
    </div> <!-- B ends -->
    
        <form method="post" id="C" enctype="multipart/form-data">

            <h3>Get in touch </h3>
        
            
                <label for='user_name'>Your name </label>
                <input type="text" class="form-control" maxlength="255" minlength="3" name="user_name" title="">
            

             
                <label for='user_email'>Email adress </label>
                <input type="email" class="form-control" name="user_email" maxlength="128" title="">
            

             
                <label for='message'>Your message </label>
                <textarea class="form-control" name="message" rows="3.5" title=""></textarea>
            

                <button class="light_pri_button" id="send">Send message</button>
            
        </form> <!-- C ends -->
</div> 

<div id="footer_bottom">
    <img src="../img/icons/visa.png" alt="pay with Visa">
    <img src="../img/icons/paypal.png" alt="pay with PayPal">
    <img src="../img/icons/american-express.png" alt="pay with American Express">
    <p>Nate's clothing store 2020 </p>
</div>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="../script/ajax.js"></script>
    <script src="../script/functions.js"></script>
    <script src="../script/vue.js"></script>
</body>
</html>