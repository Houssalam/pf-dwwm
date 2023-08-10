<?php
// Connexion à la base de données (utilisez votre propre code de connexion)
require('../database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $product_category = $_POST['product_category'];
    $product_image = $_POST['product_image'];
    $size_product = $_POST['size_product'];
    $color_product = $_POST['color_product'];

    $query = "INSERT INTO products (product_name, description, price, stock_quantity, product_category, product_image, size_product, color_product) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $insertProduct = $bdd->prepare($query);
    $insertProduct->execute([$product_name, $description, $price, $stock_quantity, $product_category, $product_image, $size_product, $color_product]);

    if ($insertProduct) {
        echo "Product added successfully";
    } else {
        echo "Error adding product.";
    }
}
?>
