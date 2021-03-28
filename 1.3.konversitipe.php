<html>
    <head>
        <title>Konversi Tipe</title>
    </head>
    <body>
        <?php //blok kode memulai php
        // mendeklarasikan variable
        $a = 300.4;
        echo $a;
        echo "<br>";
        // penggunaan tipe double, integer, string
        echo "tipe double : ", doubleval($a), "<br>";
        echo "tipe Integer : ", intval($a), "<br>";
        echo "tipe String : ", strval($a);
        ?>
    </body>
</html>