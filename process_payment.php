<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];
    $cardName = $_POST['cardName'];

    // Here you would typically process the payment using a payment gateway API
    // For this example, we'll just simulate a successful payment.

    // Clear the cart after successful payment
    // This can be done by clearing the cart in the database or in localStorage if using client-side storage

    echo "Payment successful! Thank you for your purchase.";
} else {
    echo "Invalid request.";
}
?>
