<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "dbwasto";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if ($connect) {
    echo "Koneksi dengan MYSQL Berhasil<br>";
} else {
    echo "Koneksi dengan MYSQL GAGAL" . mysqli_connect_error();
}

$sql = "CREATE TABLE user(id INT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(20) NOT NULL ,nama VARCHAR(30) NOT NULL,ttl DATETIME NOT NULL, alamat VARCHAR(50) NOT NULL)";
// $sql = "CREATE TABLE admin(id INT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(20) NOT NULL)";

if (mysqli_query($connect, $sql)) {
    echo "Tabel Mahasiswa Berhasil Dibuat<br>";
} else {
    echo "Database Gagal Dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);