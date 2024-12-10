<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'data.php';
    $index = $_POST['edit'];

    // Remove whitespace from both ends of the name and description
    $flowers[$index]['name'] = trim($_POST['name'][$index]);
    $flowers[$index]['description'] = trim($_POST['description'][$index]);

    // Update the data file
    file_put_contents('data.php', '<?php $flowers = ' . var_export($flowers, true) . '; ?>');

    // Redirect to admin page
    header('Location: admin.php');
    exit();
}
?>
