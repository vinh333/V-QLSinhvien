<?php
include('../storage/css/function.php');

$ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
$sql = "SELECT id, anhsanpham, tensanpham, giasanpham FROM sanpham";
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
    <div class="khungngoai">
        <form action="xemthem.php" method="post">

            <?php

            while ($row = mysqli_fetch_array($ketqua)) {
                echo inSP($row['anhsanpham'], $row['tensanpham'], $row['giasanpham']);
                $a = $row['id'];

                // echo "<input type=\"submit\" name\" $a\" value\"xemthem\">";
                echo  " <a href=\"xemthem.php?editid=<?php echo $a;?>\">Xemthem</a> ";
            }
            ?>
        </form>

    </div>

</body>

</html>