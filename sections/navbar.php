<nav>
    <div id="navi">
        <img src="./img/icons/logo.png" id="logo" alt="Nate's Clothing logo">
        <img src="./img/icons/down.png" id="down_button" alt="Click me">
        <a href="./views/about.php" id="ab1">About us</a>
        <a href="./views/contact.php" id="ab2">Contact us</a>
        <a href="./views/gallery.php" id="ab2">Gallery</a>
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
        <button id="cart"><img src='./img/icons/cart.png' alt="Click to view cart items"></button>
    <div>
</nav>

<div id="dropdown">
        <a href="./views/about.php">About us</a>
        <a href="./views/contact.php">Contact us</a>
        <a href="./views/gallery.php">Gallery</a>
    </div>