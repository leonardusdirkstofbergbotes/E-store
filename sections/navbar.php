<nav>
    <div id="navi">
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
                    <p>{{ name }}</p>
                </template>
            </div>
            

            

            <?php if (isset($_SESSION)) : ?> <!-- loged in as user -->
            <b><?php echo $_SESSION['name']; ?> </b>
            <?php endif; ?>

            <?php if (isset($_SESSION)) : ?> <!-- Logout the user -->
                <a href="./queries/end_ses.php"> Logout </a>
            <?php endif; ?>

        </div>
        <button id="cart"><img src='./img/icons/cart.png'></button>
    <div>
</nav>