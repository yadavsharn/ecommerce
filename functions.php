<?php
function getProducts() {
    $json = file_get_contents('products.json');
    $products = json_decode($json, true);
    return $products;
}
?>
