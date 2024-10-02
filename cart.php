<?php
session_start();
include 'functions.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>STR2</h1>
                <p>clothing</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#products">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="tel:+1235678890"><i class="fas fa-phone"></i> +123 5678 890</a></li>
                    <li class="user-info">
                        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                    </li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="cart" id="cart">
            <h2>Cart</h2>
            <ul id="cartItems"></ul>
            <p class="total">Total: ₹<span id="total">0</span></p>
            <button class="checkout-btn" onclick="checkout()">Checkout</button>
        </section>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
