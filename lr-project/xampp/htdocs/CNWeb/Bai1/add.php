<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'data.php';
    $newFlower = [
        'name' => $_POST['new_name'],
        'description' => $_POST['new_description'],
        'image' => 'images/' . basename($_FILES['new_image']['name'])
    ];
    move_uploaded_file($_FILES['new_image']['tmp_name'], $newFlower['image']);
    $flowers[] = $newFlower;
    file_put_contents('data.php', '<?php $flowers = ' . var_export($flowers, true) . '; ?>');
    header('Location: admin.php');
}
?>
