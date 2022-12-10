<?php
    include('function.php');

    $ketnoi = mysqli_connect("localhost", "root", "", "quanlygau");
    $sql = "SELECT id, hinhanh, tensanpham, giasanpham, kichthuoc FROM sanpham";
    $ketqua = mysqli_query($ketnoi, $sql);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sản phẩm mới</h1>
    <div class="khungngoai">
        <?php
           
            while($row = mysqli_fetch_array($ketqua)){
                echo inSP($row['hinhanh'], $row['tensanpham'], $row['giasanpham'], $row['kichthuoc']);
            }
        ?>
    </div>
</body>
</html>