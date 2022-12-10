<html>
<a href="upload.html">Quay về trang đăng tin</a>
<a href="IN.php">Xem toàn bộ bài viết</a>

</html>

<?php
session_start();
include('function.php');
if (isset($_POST['submit'])) {
    $tieude = $_POST['tieude']; // ?? ''
    $tacgia = $_POST['tacgia']; // ?? ''
    $ngay = $_POST['ngay']; // ?? ''

    if (isset($_FILES['anh'])) {
        $anh = $_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'], './' . $_FILES['anh']['name']);
    }
    // $_SESSION['baiviet'][] = [
    //     'anh' => $anh,
    //     'tieude' => $tieude,
    //     'tacgia' => $tacgia,
    //     'ngay' => $ngay
    // ]; 
    //ket noi
    $ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
    //    //truy van du lieu

    $sql = "INSERT INTO `data_news` ( `anh`, `tieude`, `tacgia`,`ngay` ) VALUES ( '$anh', '$tieude', '$tacgia', '$ngay'); ";
    //    //thuc hien truy van

    $ketqua = mysqli_query($ketnoi, $sql);
}
?>
<div class="khung2">
    <?php
    while ($row = mysqli_fetch_array($ketqua)) {
        // inkhungbaiviet($row['hinhanh'], $row['tensanpham'], $row['giasanpham'], $row['kichthuoc']);
        khung($row['anh'], $row['tieude'], $row['tacgia'], $row['ngay']);
    }
    // if (isset($_SESSION['baiviet'])) {
    //     foreach ($_SESSION['baiviet'] as $baiviet)

    // } else {
    //     echo 'khong co';
    // }
    ?>
</div>

<html>
<link rel="stylesheet" href="main.css">

</html>