<!-- output pada php -->
<!-- <?php 
    echo "<p>Belajar PHP</p>";
    echo ('<h1>Tanda Kurung</h1>');
    print('<h2>Tanda Kurung H3</h2>');
    printf('<h1>Fungsi Printf</h1>');
?> -->

<!-- variable dan konstanta -->
<!-- <?php
    $nilai = 1;
    echo "$nilai";
?> -->

<!-- tipe data integer, float, string, boolean, array -->
<!-- <?php
    $uang = 2000;
    echo "Uang Saya = $uang <br>";

    $nilai_ipk = 3.8;
    echo "<br>Nilai IPK Saya = $nilai_ipk <br>";

    $nama = "Fahixa";
    $alamat = "Jl. Jonggol";
    echo "<br> Nama Saya = $nama <br>";
    echo "Alamat Saya = $alamat <br>";
    
    $benar = true;
    $salah = false;
    echo"<br>";
    var_dump($benar);
    echo"<br>";
    var_dump($salah);
    echo"<br>";

    $mahasiswa = array("Fahixa", 7.0, "Yoga", 2);
    echo "<br> $mahasiswa[0]";
    echo "<br> $mahasiswa[1]";
    echo "<br> $mahasiswa[3]";
?> -->

<!-- menambahkan elemen array -->
<!-- <?php    
    $mahasiswa = array(7.0, "Fahixa", 7);
    $mahasiswa[4] = "jamet";
    $mahasiswa[5] = 3.14;
    echo("<br><br>");
    print_r($mahasiswa);
?> -->

<!-- tipe data object -->
<!-- <?php
class mahasiswa{
    public $nama;
    public $umur;
    public $tanggal_lahir;

    // function get_nama(){
    //     return $this-nama;
    // }
}
$data_mahasiswa = new mahasiswa;
$data_mahasiswa -> nama = "Fahixa";
$data_mahasiswa -> umur = 19;
$data_mahasiswa -> tanggal_lahir = "1 Januari 2001";

print_r($data_mahasiswa);
?> -->

<!-- tipe data resource -->
<!-- <?php
    $koneksi = mysqli_connect("localhost", "root", "");
    var_dump($koneksi);
    // resource(3) of type (mysql link)
?> -->

<!-- tipe data null -->
<!-- <?php
    $satu = 0;
    var_dump($satu);
    $dua = null;
    var_dump($dua);
    $tiga;
    var_dump($tiga);
?> -->

<!-- tipe casting -->
<!-- <?php
    $angka = 100;
    var_dump($angka);
    echo "<br>";
    $strangka = (string) $angka;
    var_dump($strangka);
?> -->

<!-- operator aritmatika -->
<!-- <?php
    $angka_1 = 100;
    $angka_2 = 50;

    echo "Angka pertama : $angka_1 <br>";
    echo "Angka kedua : $angka_2 <br>";

    $tambah = $angka_1 + $angka_2;
    echo "<br> Hasil Pertambahan : $tambah <br>";

    $kurang = $angka_1 - $angka_2;
    echo "<br> Hasil Pengurangan : $kurang <br>";

    $bagi = $angka_1 / $angka_2;
    echo "<br> Hasil Pembagian : $bagi <br>";

    $kali = $angka_1 * $angka_2;
    echo "<br> Hasil Perkalian : $kali <br>";

    $mod = $angka_1 % $angka_2;
    echo "<br> Hasil Modulus : $mod <br>";
?> -->

<!-- operator increment dan decrement -->
<!-- <?php
    $angka = 10;
    echo "Sebelum Increment : $angka <br>";
    $angka++;
    echo "Setelah Increment : $angka <br>";
    $angka--;
    echo "Setelah Decrement : $angka <br>";
?> -->

<!-- operator perbandingan -->
<!-- <?php
    $angka_1 = 10;
    $angka_2 = 5;

    var_dump($angka_1 < $angka_2);
    echo("<br>");
    var_dump($angka_1 > $angka_2);
    echo("<br>");
    var_dump($angka_1 >= $angka_2);
    echo("<br>");
    var_dump($angka_1 <= $angka_2);
    echo("<br>");
    var_dump($angka_1 <> $angka_2);
    echo("<br>");
    var_dump($angka_1 != $angka_2);
    echo("<br>");
    var_dump($angka_1 == $angka_2);
    echo("<br>");
    var_dump($angka_1 === $angka_2);
?> -->

<!-- operator logika -->
<!-- <?php
    $logika1 = (true and false);
    var_dump($logika1);
    echo "<br>";
    $logika2 = (true or false);
    var_dump($logika2);
    echo "<br>";
    $logika3 = (true xor false);
    var_dump($logika3);
    echo "<br>";
    $logika4 = !true;
    var_dump($logika4);
    $logika5 = ("Fahixa" and false);
    var_dump($logika5);
?> -->

<!-- operator string -->
<!-- <?php
    $nama_depan = "Fahixa";
    $nama_belakang = "Zxuan";
    $gabungan = $nama_depan . " " . $nama_belakang;
    echo "$gabungan";
?> -->

<!-- operator error control (@) -> mengabaikan code yang error -->

<!-- logika if else -->
<!-- <?php
    $user = "user";
    $admin = "admin";
    if($user == "user"){
        echo "Anda Login Sebagai User";
    } else {
        echo "Anda Tidak Login";
    }
?> -->

<!-- logika switch -->
<!-- <?php
    $banding = 5;
    switch($banding){
        case 1:
            echo "Senin";
        break;
        case 2:
            echo "Selasa";
        break;
        case 3:
            echo "Rabu";
        break;
        case 4:
            echo "Kamis";
        break;
        case 5:
            echo "Jumat";
        break;
        case 6:
            echo "Sabtu";
        break;
        case 7:
            echo "Minggu";
        break;
        default:
            echo "Hari hanya ada 7";
        break;
    }
?> -->

<!-- perulangan for -->
<!-- <?php
    for($var = 0; $var < 10; $var++){
        echo "Perulangan ke-$var <br>";
    }
?> -->

<!-- perulangan while -->
<!-- <?php
    $var = 0;
    while($var < 10){
        echo "Perulangan ke-$var <br>";
        $var++;
    }
?> -->

<!-- perulangan do while -->
<!-- <?php
    $y = 1;
    do{
        echo "Perulangan do while ke-$y <br>";
        $y++;
    } while ($y <= 10);
?> -->

<!-- perulangan foreach -->
<!-- <?php
    $angka = [1,2,3,4,5,6,7,8,9,10];
    foreach($angka as $var){
        echo "Angka ke-$var <br>";
    }

    $siswa = array("Fahixa", "Zxuan", "Yoga", "Tasyah");
    foreach($siswa as $var){
        echo "Nama Siswa : $var <br>";
    }
?> -->