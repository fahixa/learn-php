<!-- <?php
    $logika1 = false && false;
    $logika2 = false || false;
    $logika3 = false && true;
    $logika4 = false || true;
    $logika5 = true && false;
    $logika6 = true || false;
    $logika7 = true && true;
    $logika8 = true || false;
?>

<h1>Tabel Logika 1111</h1>
<table border="1">
    <tr>
        <th>Input 1</th>
        <th>Input 2</th>
        <th>AND</th>
        <th>OR</th>
    </tr>
    <tr>
        <td>false</td>
        <td>false</td>
        <td><?php echo $logika1 = 0; ?></td>
        <td><?php echo $logika2 = 0; ?></td>
    </tr>
    <tr>
        <td>false</td>
        <td>true</td>
        <td><?php echo $logika3 = 0; ?></td>
        <td><?php echo $logika4; ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>false</td>
        <td><?php echo $logika5 = 0; ?></td>
        <td><?php echo $logika6; ?></td>
    </tr>
    <tr>
        <td>true</td>
        <td>true</td>
        <td><?php echo $logika7; ?></td>
        <td><?php echo $logika8; ?></td>
    </tr>
</table> -->

<?php
    $kata_1 = "Ayo Belajar";
    $kata_2 = "Bersama Fahixa";
?>
<h1>Operator String</h1>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <th>Input 1</th>
        <th>Input 2</th>
        <th>Hasil</th>
    </tr>
    <tr>
        <td>Ayo</td>
        <td>Belajar</td>
        <td><?php echo $kata_1; ?></td>
    </tr>
    <tr>
        <td>Bersama</td>
        <td>Fahixa</td>
        <td><?php echo $kata_2 ?></td>
</table>
<?php
    $gabungan = $kata_1 . " " . $kata_2;
    echo "Gabungan : $gabungan";
?>