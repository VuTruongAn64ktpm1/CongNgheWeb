<?php
require '../models/product.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteProduct($id);
    header('Location: ../views/index.php');
    exit;
}
?>
