<nav>
    <div id="navi">
        <img src="./img/icons/logo.png" id="logo">
        <a href="#footy">About us</a>
        <a href="#footy">Contact us</a>
        <a href="#footy">About us</a>
        <div id="login_register">
             <!-- Login and register buttons -->
                <!-- Trigger login modal -->
            <div id='condi'>
                <button v-if="name == undefined" type="button" id="login" data-toggle="modal" data-target="#login_modal">
                    Login
                </button>

                <!-- Trigger signup modal -->
                <button v-if="name == undefined" type="button" id="register" data-toggle="modal" data-target="#signup_modal">
                        Register
                </button>
                <template v-if="name != undefined">
                    <div id="signed">
                        <a href="index.php">Logout</a>
                        <p>{{name}}</p>
                    </div>
                </template>
            </div>

        </div>
        <button id="cart"><img src='./img/icons/cart.png'></button>
    <div>
</nav>