<?php
require '../models/product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $price = (int)$_POST['price'];
    saveProduct($name, $price);
    header('Location: ../views/index.php');
    exit;
}
?>
