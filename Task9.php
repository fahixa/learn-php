<!-- <?php
    // deret fibonacci 0 - 20
    $x = 0;
    $angka_sebelum = 0;
    $angka_sekarang = 1;

    echo "$angka_sebelum $angka_sekarang";
    
    while($x <= 20){
        $output = $angka_sekarang + $angka_sebelum;
        echo " $output";

        $angka_sebelum = $angka_sekarang;
        $angka_sekarang = $output;
        $x++;
    }
?> -->

<?php
    // deret prima 0 - 200
    $x = 1;
    while($x <= 200){
        $k = 0;
        for($y = 1; $y <= $x; $y++){
            if($x % $y == 0){ 
                $k++;
            }
        }
        if($k == 2){ 
            echo $x.' ,';
        }
        $x++;
    }
?>