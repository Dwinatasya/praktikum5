<?php
//mengeksekusi file ini degan file  inc.php
include "2.2.inc.php";
echo $angka; //memanggil variable
echo "<br>";
//melakukan seleksi dengan if..else
if ($angka==100){
    echo "Memuaskan";
}elseif ($angka<100&&$angka>=85){
    echo "Sangat Baik";
}elseif ($angka<85&&$angka>=70){
    echo "Baik";
}elseif ($angka<70&&$angka>=55){
    echo "Cukup";
}elseif ($angka<55&&$angka>=0){
    echo "Kurang";
}
?>