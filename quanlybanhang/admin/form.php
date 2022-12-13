<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../storage/css/style.css">
</head>

<body>
    <form action="../users/themsp.php" method="POST" enctype="multipart/form-data">
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
                <td><label>Ngành hàng: </label></td>
                <td><input list="nganhhang" name="f_nganhhang">
                    <datalist id="nganhhang">
                        <option value="Thời trang nam">
                        <option value="Thời trang nam">
                        <option value="Sức khoẻ">
                        <option value="Sắc đẹp">
                    </datalist>
                </td>


            </tr>
            <tr>
                <td>Thông số kích thước</td>
                <td><input type="number" name="f_kthuoc"></td>
            </tr>
            <tr>
                <td>Mô tả</td>
                <td><input type="text" name="f_mota"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="THÊM SẢN PHẨM"></td>
            </tr>
        </table>
    </form>
</body>

</html>