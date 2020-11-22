<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "praktikumdb";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if ($connect) {
    echo "Koneksi dengan MYSQL Berhasil<br>";
} else {
    echo "Koneksi dengan MYSQL GAGAL" . mysqli_connect_error();
}

$sql = "INSERT INTO user1(id, username, password) 
VALUES('1','admin',md5('123'))";

if (mysqli_query($connect, $sql)) {
    echo "Record Table Berhasil Dibuat <br>";
} else {
    echo "Database Gagal Dibuat <br>" . mysqli_error($connect);
}
mysqli_close($connect);