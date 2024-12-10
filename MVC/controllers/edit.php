<?php
require '../models/product.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = getProductById($id);

    if (!$product) {
        die('Sản phẩm không tồn tại!');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = htmlspecialchars($_POST['name']);
    $price = (int)$_POST['price'];
    updateProduct($id, $name, $price);
    header('Location: ../views/index.php');
    exit;
}
?>
