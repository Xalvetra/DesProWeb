<html>

<head></head>

<body>
    <table>
        <form action="RegistrasiProses.php" method="GET">
            <tr>
                <td>ID: </td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>username yang akan dipakai: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir: </td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><textarea name="alamat" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </form>
    </table>
</body>

</html>