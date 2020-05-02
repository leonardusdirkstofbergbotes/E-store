<nav>
    <div id="navi">
        <a href="#footy">About us</a>
        <a href="#footy">Contact us</a>
        <a href="#footy">About us</a>
        <!-- Trigger signup modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup">
            Register
        </button>

        <!-- Trigger login modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
            Login
        </button>
        <button id="cart" <?php if (!isset($_SESSION)) {echo "disabled";} else {}; ?>><img src='./img/icons/cart.png'></button>
    <div>
</nav>