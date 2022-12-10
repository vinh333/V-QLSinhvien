<html>
    <a href="upload.html">Quay về trang đăng tin</a>
    <!-- <a href="index.php">Quay về trang trước</a> -->
</html>

<?php
    session_start();
    include('function.php');
    // if(isset($_POST['submit'])){
    //     $tieude = $_POST['tieude'];// ?? ''
    //     $tacgia = $_POST['tacgia'];// ?? ''
    //     $ngay = $_POST['ngay'];// ?? ''
            
    //         if(isset($_FILES['anh'])){
    //             $anh = $_FILES['anh']['name'];
    //             move_uploaded_file($_FILES['anh']['tmp_name'], './' . $_FILES['anh']['name']);
    //         }
    //     $_SESSION['baiviet'][] = [
    //         'anh' => $anh,
    //         'tieude' => $tieude,
    //         'tacgia' => $tacgia,
    //         'ngay' => $ngay
    //     ];            
    //     }
?>
    <div class="khung2">
        <?php
            if(isset($_SESSION['baiviet'])){
                foreach ($_SESSION['baiviet'] as $baiviet)
                    khung($baiviet['anh'], $baiviet['tieude'], $baiviet['tacgia'], $baiviet['ngay']);
            } else{
                echo 'khong co';
            }
        ?>
    </div> 

<html>
    <link rel="stylesheet" href="main.css">
</html>
