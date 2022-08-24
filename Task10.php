<?php
    // sorting deret bilangan array
    $arr = array(1,3,8,2,5,7,4,0);

    print("Sebelum Di Sorting :<br>");
    print_r($arr);

    $arr = bubble_sort($arr);
    print("<br> Setelah Disorting (Buble Sort) :<br>");
    print_r($arr);


    function bubble_sort($arr) {
        $n = count($arr);
        for($i = 0; $i < $n; $i++) {
            for($j = 0; $j < $n - $i - 1; $j++) {
                if($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }
        return $arr;
    }
?>