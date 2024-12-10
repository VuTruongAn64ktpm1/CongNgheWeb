<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'data.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Hoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Các loài hoa</h1>
    <div id="flower-list">
        <?php
        foreach ($flowers as $flower) {
            echo '<div class="flower-item">';
            echo '<h2>' . $flower['name'] . '</h2>';
            echo '<p>' . $flower['description'] . '</p>';
            echo '<img src="' . $flower['image'] . '" alt="' . $flower['name'] . '">';
            
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
