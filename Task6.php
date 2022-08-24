<!-- Soal 1
Aji adalah kakak Habib, 4 tahun lebih tua. 
Bintan adalah kakak Aji dan berbeda 3 tahun. 
Berapakah usia Bintan, jika saat ini Habib baru
saja merayakan ulang tahun yang ke-21? -->

<!-- <?php
    $usia_habib = 21;
    $usia_aji = $usia_habib + 4;
    $usia_bintan = $usia_aji + 3;

    echo "============================== <br>";
    echo "Usia Habib = $usia_habib tahun <br>";
    echo "Usia Aji = $usia_aji tahun <br>";
    echo "Usia Bintan = $usia_bintan tahun <br>";
    echo "============================== <br>";
?> -->

<!-- Soal 2
Seorang pedagang menjual jambu dengan
harga Rp 15.000/kg. Di dalam tokonya
terdapat 6 dus dan di setiap dus berisi 5 kg jambu.
Dua bekas tempat jambu itu masih bisa dijual lagi
dengan harga Rp 2.000/dus. Berapakah uang hasil
penjualan seluruh jambu dan dus tersebut? -->

<?php
    $jambu = 15000;
    $jml_dus = 6;
    $hargaper_dus = 2000;
    $jml_jambu = $jml_dus * 5;
    $ttl_jambu = $jambu * $jml_jambu;
    $ttl_dus = $hargaper_dus * $jml_dus;
    $total = $ttl_jambu + $ttl_dus;

    echo "============================== <br>";
    echo "Harga Jambu = Rp $jambu /Kg <br>";
    echo "Harga Kardus = Rp $hargaper_dus /pcs <br>";
    echo "Total Penjualan (Dus dan Jambu) = Rp " . $total . "<br>";
    echo "============================== <br>";
?>

