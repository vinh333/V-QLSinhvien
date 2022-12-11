<?php
    function thongso($anh, $tensp, $gia, $kthuoc, $nganhhang, $mota){
    echo "<div class=\"khungtrong\">";
        echo "<img src=\"" .$anh. "\" >";
        echo "<h2>" . $tensp . "</h2>";
        echo "<div class=\"thongtin\">";
            echo "<a>" . $gia . "</a>";
            echo "<div class=\"thongso\">";
                echo "<p>" . $kthuoc . "x" . $kthuoc. "</p>";
                echo "<p>" . $nganhhang . "</p>";
                echo "<p>" . $mota . "</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    }
?>

<?php
    function inSP($anh, $tensp, $gia){
    echo "<div class=\"khungtrong\">";
        echo "<img src=\"" .$anh. "\" >";
        echo "<h2>" . $tensp . "</h2>";
        echo "<div class=\"thongtin\">";
            echo "<a>" . $gia . "</a>";
            echo "<div class=\"thongso\">";
                echo "<a href=\"xemthem.php\">" . "Xem thêm" . "</a>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    }
?>