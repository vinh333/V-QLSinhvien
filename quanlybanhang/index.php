<?php
include('function.php');

$ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
$sql = "SELECT  `anhsanpham`, `tensanpham`,`giasanpham`, `kichthuoc` , `nganhhang`, `mota` FROM sanpham";
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

        while ($row = mysqli_fetch_array($ketqua)) {
            if (strlen($row['mota']) >= 15) {

                $row['mota'] = substr($row['mota'], 0, 75);
                $row['mota'] .= "...";
            }
            echo inSP($row['anhsanpham'], $row['tensanpham'], $row['giasanpham'], $row['kichthuoc'], $row['nganhhang'], $row['mota']);
        }
        ?>
    </div>
</body>

</html>