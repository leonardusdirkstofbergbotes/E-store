<nav>
    <div id="navi">
        <a href="#footy">About us</a>
        <a href="#footy">Contact us</a>
        <a href="#footy">About us</a>
        <!-- Trigger signup modal -->
        <div id="contact">
            <button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal">
                Show Contact Form
            </button>
        </div>

        <!-- Trigger login modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
            Login
        </button>
        <?php if (isset($_SESSION)) : ?>
            <p>Signed in as <?php echo $_SESSION['name']; ?> </p>
        <?php endif; ?>
        <button id="cart" <?php if (!isset($_SESSION)) {echo "disabled"; echo " title=\"please login to use the cart\"";} else {}; ?>><img src='./img/icons/cart.png'></button>
    <div>
</nav>