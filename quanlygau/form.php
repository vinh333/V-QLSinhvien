<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="themsp.php" method="POST" enctype="multipart/form-data">
        <h1>Form thêm sản phẩm</h1>
        <table>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="f_anh" required></td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="f_tensp" required></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="number" name="f_gia"></td>
            </tr>
            <tr>
                <td>Thông số kích thước</td>
                <td><input type="number" name="f_kthuoc"></td>
            </tr>
            <tr>
                <td><input type="submit" value="THÊM SẢN PHẨM"></td>
            </tr>
        </table>
    </form>
</body>
</html>