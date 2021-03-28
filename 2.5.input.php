<html>
    <head>
        <title></title>
    </head>
    <body>
        <!--membuat form-->
        <!--melanjutkan aksi ke file hasilkirim-->
        <form method="POST" action="2.5.hasilkirim.php"> 
            <!--membuat tabel dengan beberapa pengaturan-->
            <table width="400" align="center" callpadding="2" callspacing="2">
                <tr> <!-- menampilkan text box nama-->
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr> <!-- menampilkan button submit dan reset-->
                    <td colspan="2" align="center">
                        <input type="submit" name="btnlogin" value="Login">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>