<!-- <?php
    echo "Harga Beli = Rp 8000 <br>";
    echo "Harga Jual = Rp 7500 <br>";
    echo "Keuntungan = Rp 300 <br>";
    echo "Berapa Jumlah Kambing yang dibeli <br>";
    echo "Jawaban : ... ekor <br>";

    $beli = 8000;
    $jual = 7500;
    $untung = 300;
    
    $jumlah = ($jual - $beli) / $untung;
    $hasil = round($jumlah);
    echo "Jumlah Kambing yang dibeli $hasil ekor <br>";
    echo "Karena banyaknya suatu kambing tidak mungkin negatif, maka berlaku konsep mutlak. <br>";
    echo "Sehingga banyaknya anak kambing yang dibeli sebanyak 2 ekor.";
?> -->

<?php
    echo "Jumlah Saluran = 523 <br>";
    echo "Jumlah terpakai = 8891 <br>";
    echo "Rata-rata Pemakaian = ...? <br>";
    echo "Jawaban : ... liter/keluarga <br>";

    $jml_saluran = 523;
    $jml_pakai = 8891;
    
    $rata_pakai = $jml_pakai / $jml_saluran;
    echo "Rata-rata Pemakaian = $rata_pakai liter/keluarga";
?>