<!-- <?php 
    echo("<h1>Daftar Menu</h1>");

    echo("<ul>");
        echo("<li>Ayam Goreng = Rp. 13000</li>");
        echo("<li>Ayam Bakar = Rp. 15000</li>");
        echo("<li>Ayam Sayur = Rp. 13000</li>");
        echo("<li>Tempe Goreng = Rp. 1000</li>");
        echo("<li>Tahu Goreng = Rp. 1000</li>");
        echo("<li>Soto = Rp. 3000</li>");
        echo("<li>Nasi Putih = Rp. 5000</li>");
        echo("<li>Es Teh = Rp. 4000</li>");
        echo("<li>Es Tebu = Rp. 5000</li>");
    echo("</ul>");
?> -->


<?php
    echo("<h1>Daftar Menu</h1>");
    echo("<style>");
        echo("table, th, td {
            border: 1px solid black;

        }");
    echo("</style>");
    echo("<table>");
        echo("<tr>");
            echo("<th>No.</th>");
            echo("<th>Nama Menu</th>");
            echo("<th>Harga</th>");
        echo("</tr>");
        echo("<tr>");
            echo("<td>1.</td>");
            echo("<td>Cireng</td>");
            echo("<td>Rp. 1000</td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td>2.</td>");
            echo("<td>Es Duren</td>");
            echo("<td>Rp. 15000</td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td>3.</td>");
            echo("<td>Es Milo</td>");
            echo("<td>Rp. 20000</td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td>4.</td>");
            echo("<td>Es Teh</td>");
            echo("<td>Rp. 5000</td>");
        echo("</tr>");
        echo("<tr>");
            echo("<td>5.</td>");
            echo("<td>Piscok</td>");
            echo("<td>Rp. 1000</td>");
        echo("</tr>");
    echo("</table>");
?>