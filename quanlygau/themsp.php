<?php
$ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
if (!$ketnoi) {
    exit("Kết nối từ cơ sở dữ liệu thất bại!!");
}
move_uploaded_file($_FILES['f_anh']['tmp_name'], './imgs/' . $_FILES['f_anh']['name']);
$anh = './imgs/' . $_FILES['f_anh']['name'];
$tensp = $_POST['f_tensp'];
$gia = $_POST['f_gia'];
$k_thuoc = $_POST['f_kthuoc'];
$nganhhang = $_POST['f_nganhhang'];
// $mota = $_POST['mota'];

echo $nganhhang;
// // $sql = "INSERT INTO `sanpham` ( `hinhanh`, `tensanpham`, `giasanpham`, `kichthuoc`) VALUES('$anh', '$tensp', '$gia', '$k_thuoc');";
$sql = "INSERT INTO `sanpham` ( `anhsanpham`, `tensanpham`,`giasanpham`, `nganhhang`, `kichthuoc`) VALUES('$anh', '$tensp', '$gia','$nganhhang' , '$k_thuoc');";
$ketqua = mysqli_query($ketnoi, $sql);

//     if($ketqua){
//         // include('index.php');
//     // header('location: index.php');
//     echo "Kết nối";
// } else

echo "<script>";
if ($ketqua) {
    echo "alert(\"Thêm thành công\");";
    header('location: index.php');
} else {
    echo "alert(\"Thêm không thành công\");";
}
//    echo "windown.location = \"index.php\";";
echo "</script>";
