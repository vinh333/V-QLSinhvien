<!-- <?php
    // function inSP($anh, $tensp, $gia, $kthuoc){
    // echo "<div class=\"khungtrong\">";
    //     echo "<img src=\"" .$anh. "\" >";
    //     echo "<h2>" . $tensp . "<\h2>";
    //     echo "<div class=\"thongtin\">";
    //         echo "<p>" . $gia . "<\p>";
    //         echo "<div class=\"thongso\">";
    //             echo "<p>" . $kthuoc . "<\p>";
    //             echo "<p>" . $kthuoc . "<\p>";
    //         echo "<\div>";
    //     echo "<\div>";
    // echo "<\div>";
    // }
?> -->

<?php
    //session_start();
     function inSP($anh, $tensp, $gia, $kthuoc){
        echo "<div class=\"khungtrong\">";
            echo "<img src=\"" .$anh. "\" >";
            echo "<h2>" . $tensp . "</h2>";
            echo "<h4>" . $gia . "</h4>";
            echo "<p>" . $kthuoc .  $kthuoc. "</p>";
        echo "</div>";
    }
?>