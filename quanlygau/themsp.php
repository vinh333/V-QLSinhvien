<?php
    $ketnoi = mysqli_connect("localhost", "root","", "quanlygau");
    if(!$ketnoi){
        exit("Kết nối từ cơ sở dữ liệu thất bại!!");
    }

    $tensp = $_POST['f_tensp'];
    $gia = $_POST['f_gia'];
    $k_thuoc = $_POST['f_kthuoc'];
    move_uploaded_file($_FILES['f_anh']['tmp_name'], './imgs/' . $_FILES['f_anh']['name']);
    $anh = './imgs/' . $_FILES['f_anh']['name'];

    $sql = "INSERT INTO `sanpham` ( `hinhanh`, `tensanpham`, `giasanpham`, `kichthuoc`) VALUES('$anh', '$tensp', '$gia', '$k_thuoc');";
    //INSERT INTO `sanpham` (`id`, `hinhanh`, `tensanpham`, `giasanpham`, `kichthuoc`) VALUES (NULL, '', 'gau', '12000', '3');

    $ketqua = mysqli_query($ketnoi, $sql);

//     if($ketqua){
//         // include('index.php');
//     // header('location: index.php');
//     echo "Kết nối";
// } else
    
echo "<script>";
    if($ketqua){
        echo "alert(\"Thêm thành công\");";
        header('location: index.php');
    }else{
        echo "alert(\"Thêm không thành công\");";
    }
//    echo "windown.location = \"index.php\";";
echo "</script>";

?>