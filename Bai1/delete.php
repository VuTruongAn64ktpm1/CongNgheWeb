<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'data.php';
    $index = $_POST['delete'];
    array_splice($flowers, $index, 1);
    file_put_contents('data.php', '<?php $flowers = ' . var_export($flowers, true) . '; ?>');
    header('Location: admin.php');
}
?>
