<?php
    for($k = 1; $k <= 2; $k++){
        for($x = 10; $x > 0; $x--){
            for($i = 1; $i <= $x; $i++){
                echo "_";
            }
            for($x1 = 10; $x1 > $x; $x1--){
                echo"x";
            }
            for($x2 = 10; $x2 > $x; $x2--){
                echo"x";
            }
        echo"<br>";
        }
        for($y = 0; $y <= 10; $y++){
            for($j = 1; $j <= $y; $j++){
                echo"_";
            }
            for($y1 = 10; $y1 > $y; $y1--){
                echo"x";
            }
            for($y2 = 10; $y2 > $y; $y2--){
                echo"x";
            }
        echo"<br>";
        }
    }
?>