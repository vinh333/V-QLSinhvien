<?php
    function inSP($anh, $tensp, $gia, $kthuoc){
    echo "<div class=\"khungtrong\">";
        echo "<img src=\"" .$anh. "\" >";
        echo "<h2>" . $tensp . "</h2>";
        echo "<div class=\"thongtin\">";
            echo "<a>" . $gia . "</a>";
            echo "<div class=\"thongso\">";
                echo "<p>" . $kthuoc . "</p>";
                echo "<p>" . $kthuoc . "</p>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    }
?>

<?php
    //session_start();
    //  function inSP($anh, $tensp, $gia, $kthuoc){
    //     echo "<div class=\"khungtrong\">";
    //         echo "<img src=\"" .$anh. "\" >";
    //         echo "<p class=\"thongtin\">" . $tensp . "</p>";
    //         echo "<h4>" . $gia . "</h4>";
    //         echo "<div class=\"thongso\">" . $kthuoc . " x " . $kthuoc. "</div>";
    //     echo "</div>";
    //}
?> 
