<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            text-decoration: none;
            font-size: 14px;
            color: #007bff;
            display: inline-block;
            margin-top: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm sản phẩm mới</h1>
        <form method="post" action="../controllers/add.php">
            <label for="name">Tên sản phẩm:</label>
       1
            <label for="price">Giá:</label>
            <input type="number" id="price" name="price" placeholder="Nhập giá sản phẩm" min="1" required>

            <button type="submit">Thêm sản phẩm</button>
            <a href="index.php">Quay lại danh sách</a>
        </form>
    </div>
</body>
</html>
