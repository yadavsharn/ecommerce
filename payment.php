<?php
session_start();
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
    <title>Payment</title>
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
        <section class="payment">
            <h2>Payment</h2>
            <form id="paymentForm" method="POST" action="process_payment.php">
                <div>
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" id="cardNumber" name="cardNumber" required pattern="\d{16}">
                </div>
                <div>
                    <label for="expiryDate">Expiry Date:</label>
                    <input type="text" id="expiryDate" name="expiryDate" required placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/\d{2}">
                </div>
                <div>
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" required pattern="\d{3}">
                </div>
                <div>
                    <label for="cardName">Cardholder Name:</label>
                    <input type="text" id="cardName" name="cardName" required>
                </div>
                <button type="submit">Pay Now</button>
            </form>
        </section>
    </main>

    <script>
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            // Example validation - Check if card number is 16 digits
            var cardNumber = document.getElementById('cardNumber').value;
            if (!/^\d{16}$/.test(cardNumber)) {
                alert('Please enter a valid 16-digit card number.');
                e.preventDefault();
            }

            // Check if expiry date is valid
            var expiryDate = document.getElementById('expiryDate').value;
            if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiryDate)) {
                alert('Please enter a valid expiry date in MM/YY format.');
                e.preventDefault();
            }

            // Check if CVV is valid
            var cvv = document.getElementById('cvv').value;
            if (!/^\d{3}$/.test(cvv)) {
                alert('Please enter a valid 3-digit CVV.');
                e.preventDefault();
            }
        });
    </script>
</body>
</html>
