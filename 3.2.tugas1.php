<?php
//mengunakan include untuk mengambil input 3.1.tugas1.php
include "3.1.tugas1.php";
//melalkukan seleksi dengan if..else
if (empty($_POST['username'] && $_POST['email'])){
    header("Location:4.1.tugas2.php"); //melakukan redirect
}else {
    //menampilkana nama pengguna dan email
   echo "<center>Username : " . $_POST['username'] . "</center><br>";
   echo "<center>Email : " . $_POST['email'] . "</center><br>";
   echo date("D-m-F-Y, g:i:s a"); // menampilkan penanggalan
  echo "<br></br>";
  //membuat text url 
  echo "<a href=5.1.tugas3.php>Kunjungi Biodata</a>";
}
?>