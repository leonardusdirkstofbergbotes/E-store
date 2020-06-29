<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="shortcut icon" href="../img/icons/favi.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<nav>
    <div id="navi">
    <a href="../index.php"><img src="../img/icons/logo.png" id="logo" alt="Nate's Clothing logo"></a>
        <img src="../img/icons/down.png" id="down_button" alt="Click me">
        <a href="about.php" id="ab1">About us</a>
        <a href="gallery.php" id="ab2">Gallery</a>
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
        <a href="#B">About us</a>
        <a href="#C">Contact us</a>
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