<!-- <?php
    echo "Jarak kota A - Z = 360 Km <br>";
    echo "Kecepatan motor = 90 <br>";
    echo "Waktu tempuh = ? <br>";
    echo "Jawaban : ... menit <br>";

    $jarak = 360;
    $kecepatan = 90;
    $waktu = ($jarak / $kecepatan) * 60;
    echo "Lama perjalanan adalah $waktu menit"
?> -->

<?php
    echo "Tabungan Awal = Rp 150000 <br>";
    echo "Bunga Setahun = 12,5% <br>";
    echo "Total Tabungan Setahun <br>";
    echo "Jawaban : Rp ... <br>";

    $tabungan = 150000;
    $bunga = 0.125;
    $waktu_nabung = 1;

    $bunga_setahun = $tabungan * $bunga * $waktu_nabung;
    echo "Bunga yang didapat selama setahun adalah $bunga_setahun <br>";
    $jumlah_tabungan = $tabungan + $bunga_setahun;
    echo "Jumlah tabungan Defan setelah 1 tahun adalah $jumlah_tabungan" 
?>