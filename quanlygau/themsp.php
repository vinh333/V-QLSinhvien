<?php
$ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
if (!$ketnoi) {
    exit("Kết nối từ cơ sở dữ liệu thất bại!!");
}

if (isset($_POST['submit'])) {
    // Get data
    move_uploaded_file($_FILES['f_anh']['tmp_name'], './imgs/' . $_FILES['f_anh']['name']);
    $anh = './imgs/' . $_FILES['f_anh']['name'];
    $tensp = $_POST['f_tensp'];
    $gia = $_POST['f_gia'];
    $k_thuoc = $_POST['f_kthuoc'];
    $nganhhang = $_POST['f_nganhhang'];
    $mota = $_POST['f_mota'];
    // check 
    if (empty($anh)) {
        array_push($errors, "Vui lòng thêm ảnh");
    }
    if (empty($tensp)) {
        array_push($errors, "Vui lòng thêm tên sản phẩm");
    }

    if (empty($gia)) {
        array_push($errors, "Vui lòng thêm giá sản phẩm");
    }
    if (empty($k_thuoc)) {
        array_push($errors, "Vui lòng thêm kích thước");
    }

    if (empty($nganhhang)) {
        array_push($errors, "Vui lòng chọn ngành hàng");
    }
    if (empty($mota)) {
        array_push($errors, "Vui lòng thêm mô tả");
    }
    
    // // $sql = "INSERT INTO `sanpham` ( `hinhanh`, `tensanpham`, `giasanpham`, `kichthuoc`) VALUES('$anh', '$tensp', '$gia', '$k_thuoc');";
    $sql = "INSERT INTO `sanpham` ( `anhsanpham`, `tensanpham`,`giasanpham`, `kichthuoc` , `nganhhang`, `mota`) VALUES('$anh', '$tensp', '$gia', '$k_thuoc', '$nganhhang' ,'$mota' );";
    $ketqua = mysqli_query($ketnoi, $sql);

   // if ($ketqua) {
        // include('index.php');
        header('location: index.php');
   // }
    //     echo "Kết nối";
    // } else

    // echo "<script>";
    // if ($ketqua) {
    //     echo "alert(\"Thêm thành công\");";
    //     header('location: index.php');
    // } else {
    //     echo "alert(\"Thêm không thành công\");";
    // }
    // //    echo "windown.location = \"index.php\";";
    // echo "</script>";
}