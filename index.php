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
    <title>Clothing Store</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    </style>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <div class="logo">
                        <h1>STR2</h1>
                        <p>clothing</p>
                    </div>
                    <li>
                        <form method="GET" action="index.php" class="search-bar">
                            <input type="text" name="search" placeholder="Search for products...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    <li class="user-info">
                        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                    </li>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="tel:+1235678890"><i class="fas fa-phone"></i> +123 5678 890</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="promo">
            <div class="promo-text">
                <h2>Find the Boundaries. Push Through!</h2>
                <p>Summer Sale</p>
                <h3>70% OFF</h3>
                <p>Starting at <span class="price">₹270 only</span></p>
                <a href="#products" class="shop-button">Shop Now!</a>
            </div>
        </section>

        <section class="products">
        <h2 class="product-title">Our Products</h2>
        <div class="product-grid">
                <?php
                    $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
                    $products = getProducts($searchTerm);
                    foreach ($products as $product) {
                        echo '<div class="product">';
                        echo '<div class="product-image">';
                        echo '<img src="' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '">';
                        echo '</div>';
                        echo '<div class="product-details">';
                        echo '<h3>' . htmlspecialchars($product['name']) . '</h3>';
                        echo '<p>Price: ₹' . htmlspecialchars($product['price']) . '</p>';
                        echo '<button onclick="addToCart(\'' . htmlspecialchars($product['name']) . '\', ' . htmlspecialchars($product['price']) . ')">Add to Cart</button>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="social-share">
            <ul>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-linkedin-in"></i></li>
                <li><i class="fab fa-github"></i></li>
            </ul>
        </div>
        <div class="general-info">
            <div class="help">
                <h3>Help</h3>
                <ul>
                    <li>frequently asked questions</li>
                    <li>delivery information</li>
                    <li>return</li>
                    <li>product recall</li>
                    <li>customer care</li>
                </ul>
            </div>
            <div class="store-location">
                <h3>our location</h3>
                <ul>
                    <li>Jhansi</li>
                    <li>Kanpur</li>
                    <li>Delhi</li>
                    <li>Bangalore</li>
                    <li>Gurgaon</li>
                </ul>
            </div>
            <div class="legal">
                <h3>privacy & legal </h3>
                <ul>
                    <li>cookies & privacy policy</li>
                    <li>terms & conditions</li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
