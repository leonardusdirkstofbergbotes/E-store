<nav>
    <div id="navi">
        <a href="#footy">About us</a>
        <a href="#footy">Contact us</a>
        <a href="#footy">About us</a>
        <div id="login_register">
            <?php if (!isset($_SESSION)) : ?> <!-- Login and register buttons -->
                <!-- Trigger login modal -->
                <button type="button" id="login" data-toggle="modal" data-target="#login_modal">
                    Login
                </button>

                <!-- Trigger signup modal -->
                <button type="button" id="register" data-toggle="modal" data-target="#signup_modal">
                        Register
                </button>
            <?php endif; ?>

            <?php if (isset($_SESSION)) : ?> <!-- loged in as user -->
            <b><?php echo $_SESSION['name']; ?> </b>
            <?php endif; ?>

            <?php if (isset($_SESSION)) : ?> <!-- Logout the user -->
                <a href="./queries/end_ses.php"> Logout </a>
            <?php endif; ?>

        </div>
        <button id="cart" <?php if (!isset($_SESSION)) {echo "disabled"; echo " title=\"please login to use the cart\"";} else {}; ?>><img src='./img/icons/cart.png'></button>
    <div>
</nav>