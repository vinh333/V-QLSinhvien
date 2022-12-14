<?php
include('../storage/css/function.php');

$ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
$sql = "SELECT `id`, `anhsanpham`, `tensanpham`,`giasanpham`, `kichthuoc` , `nganhhang`, `mota` FROM sanpham";
$ketqua = mysqli_query($ketnoi, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../storage/css/style.css">
</head>

<body>
    <h1>Sản phẩm mới</h1>

    <?php

    // if ($row = mysqli_fetch_array($ketqua)) {
    //     echo thongso($row['anhsanpham'], $row['tensanpham'], $row['giasanpham'], $row['kichthuoc'], $row['nganhhang'], $row['mota']);
    // }
    $eid = $_GET['editid'];
    while ($row = mysqli_fetch_array($ketqua)) {
        if ($row['id'] == $eid) {
            echo thongso($row['anhsanpham'], $row['tensanpham'], $row['giasanpham'], $row['kichthuoc'], $row['nganhhang'], $row['mota']);
        }
    }
    ?>


</body>

</html>