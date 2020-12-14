<?php
    include "koneksi.php";
    
    $noid=$_GET['noid'];
	$nama=$_GET['nama'];
	$umur=$_GET['umur'];
	$ttl=$_GET['ttl'];
	$notelp=$_GET['notelp'];
    $email=$_GET['email'];
	$pengambilansampah=$_GET['pengambilansampah'];
	$agenkebersihan=$_GET['agenkebersihan'];
	$provinsi=$_GET['provinsi'];
	$alamat=$_GET['alamat'];
	$kota=$_GET['kota'];
    $kodepos=$_GET['kodepos'];
	
	$sql="INSERT INTO pemesanan(noid, nama,umur,ttl,notelp,email,pengambilansampah,agenkebersihan, provinsi, alamat, kota, kodepos)
		  VALUE('$noid','$nama','$umur','$ttl','$notelp','$email','$pengambilansampah','$agenkebersihan','$provinsi','$alamat','$kota', '$kodepos')";


	if (mysqli_query($connect, $sql)){
		echo "Data Anda Berhasil berhasil ditambahkan";
	}
	else{
		echo "Data Anda gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
?>