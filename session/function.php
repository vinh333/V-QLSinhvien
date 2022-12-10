<?php
    //session_start();
    function khung($anh ,$tieude ,$tacgia, $ngay){
        echo "<div class=\"khunghinh\">";
            echo "<img src=\"" .$anh. "\" >";
            echo "<h2>" . $tieude . "</h2>";
            echo "<h4>" . $tacgia ."-". $ngay . "</h4>";
        echo "</div>";
    }
?>
