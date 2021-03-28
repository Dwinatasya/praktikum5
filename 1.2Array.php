<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php //blok kode memulai php
        // membuat array
        $nama[] = "Kadek";
        $nama[] = "Dwi ";
        $nama[] = "Natasya ";
        $jum_array = count($nama); // mengitung jumlah array
        // menampilkan ke dalam browser
        echo $nama[1] . $nama[2] . $nama[0];
        echo "<br>";
        echo "jumlah elemen array = " . $jum_array;
        ?> 
    </body>
</html>