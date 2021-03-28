<html>
    <head>
        <title>From Login</title>
    </head>
    <body>
        <!--membuata tabel-->
        <!--menggunakna method post dan melanjutkan action ke 
            file 3.2.tugas1-->
        <form method="POST" action="3.2.tugas1.php"> 
            <table width="400" align="center" callpadding="2" callspacing="2">
                <tr> <!--menampilkan username-->
                    <td width="130">Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr><!--menampilkan email-->
                    <td width="130">Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr><!--menampilkan button submit dan reset-->
                    <td colspan="2" align="center">
                        <input type="submit" name="btnlogin" value="Login">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

