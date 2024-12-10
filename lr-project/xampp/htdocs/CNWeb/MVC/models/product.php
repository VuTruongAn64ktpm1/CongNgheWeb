<?php
require 'db.php';

function loadProducts() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveProduct($name, $price) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
    $stmt->execute(['name' => $name, 'price' => $price]);
}

function deleteProduct($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
}

function getProductById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function updateProduct($id, $name, $price) {
    global $conn;
    $stmt = $conn->prepare("UPDATE products SET name = :name, price = :price WHERE id = :id");
    $stmt->execute(['id' => $id, 'name' => $name, 'price' => $price]);
}
?>
