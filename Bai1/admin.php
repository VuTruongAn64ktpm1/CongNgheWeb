<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị Hoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Quản Trị Các Loài Hoa</h1>
    <button onclick="location.href='option.php'" style="margin-bottom: 20px;">Quay về lựa chọn</button>
    <form action="add.php" method="POST" enctype="multipart/form-data">
        <table>
            <thead>
                <tr>
                    <th>Tên Hoa</th>
                    <th>Mô Tả</th>
                    <th>Hình Ảnh</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'data.php';
                foreach ($flowers as $index => $flower) {
                    echo '<tr>';
                    echo '<td><input type="text" name="name[]" value="' . $flower['name'] . '"></td>';
                    echo '<td><input type="text" name="description[]" value="' . $flower['description'] . '"></td>';
                    echo '<td><img src="' . $flower['image'] . '" alt="' . $flower['name'] . '" style="max-width: 100px;"></td>';
                    echo '<td>';
                    echo '<form action="edit.php" method="POST">';
                    echo '<button type="submit" name="edit" value="' . $index . '">Sửa</button>';
                    echo '</form>';
                    echo '<form action="delete.php" method="POST">';
                    echo '<button type="submit" name="delete" value="' . $index . '">Xóa</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
                <tr>
                    <td><input type="text" name="new_name"></td>
                    <td><input type="text" name="new_description"></td>
                    <td><input type="file" name="new_image" accept="image/*"></td>
                    <td><button type="submit" name="add">Thêm</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
