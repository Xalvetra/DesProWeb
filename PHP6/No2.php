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

$sql = "CREATE TABLE user1(id INT PRIMARY KEY, 
username VARCHAR(30) NOT NULL, password VARCHAR(50) NOT NULL)";

if (mysqli_query($connect, $sql)) {
    echo "Tabel Mahasiswa Berhasil Dibuat<br>";
} else {
    echo "Database Gagal Dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);