<?php
//menseleksi dengan if..else
if (empty($_POST['nama'])){
    header("Location:2.5.kosong.php"); //redirect pada file php
}else {// menampilkan nama
    echo "<center>Nama : " . $_POST['nama'] . "</center><br>";
}
?>