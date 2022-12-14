<?php
function thongso($anh, $tensp, $gia, $kthuoc, $nganhhang, $mota)
{
    echo "<img class=\"anh_2\" src=\"" . $anh . "\" >";
    echo "<div class=\"khungtrong_2\">";
    echo "<h2 class=\"tensp_2\">" . $tensp . "</h2>";
    echo "<div class=\"thongtin_2\">";
    echo "<p class=\"gia_2\">" . "GIÁ: " . $gia . "đ" . "</p>";
    echo "<div class=\"thongso_2\">";
    echo "<p>" . "KICH THƯỚC: " . $kthuoc . " x " . $kthuoc . "</p>";
    echo "<p>" . "DANH MỤC: " . $nganhhang . "</p>";
    echo "<p>" . "MÔ TẢ: " . $mota . "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>

<?php
function inSP($anh, $tensp, $gia, $eid)
{
    echo "<div class=\"khungtrong_1\">";
    echo "<img class=\"anh_1\" src=\"" . $anh . "\" >";
    echo "<h2 class=\"tensp_1\">" . $tensp . "</h2>";
    echo "<div class=\"thongtin_1\">";
    echo "<p>" . $gia . "đ" . "</p>";
    echo "<div class=\"thongso_1\">";
    echo  " <a href=\"xemthem.php?editid= $eid\">Xem thêm</a> ";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>
