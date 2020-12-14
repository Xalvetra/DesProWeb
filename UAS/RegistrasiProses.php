<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$username=$_GET['username'];
	$password=$_GET['password'];
    $nama=$_GET['nama'];
	$ttl=$_GET['ttl'];
	$alamat=$_GET['alamat'];


	$sql="INSERT INTO user(id, username, password, nama, ttl, alamat)
		  VALUE('$id', '$username', '$password', '$nama', '$ttl', '$alamat')";

	if (mysqli_query($connect, $sql)){
		echo "Registrasi Anda Berhasil berhasil ditambahkan";
	}
	else{
		echo "Regestrasi Anda gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
?>