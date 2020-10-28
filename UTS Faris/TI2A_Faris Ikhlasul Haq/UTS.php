<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php
			$var3=$_POST['var3'];
			if($var3=="Member"){
				echo"Anda adalah : member";
				echo "<br><br>";

				$var2=$_POST['var2'];
				echo"Nama Anda adalah : $var2";
				echo "<br><br>";

				$var4=$_POST['var4'];
				echo"Pilihan Anda adalah : $var4";
				echo "<br><br>";
			}
			else if($var3=="Non-Member"){
				echo"Anda adalah : non-member";
				echo "<br><br>";

				$var2=$_POST['var2'];
				echo"Nama Anda adalah : $var2";
				echo "<br><br>";

				$var4=$_POST['var4'];
				echo"Pilihan Anda adalah : $var4";
				echo "<br><br>";
			}
		?>
</body>
</html>