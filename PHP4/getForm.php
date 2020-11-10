<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!-- 	Welcome
	<?php 
	echo $_GET["username"];?> !! <br>
    Your Email Address is : 
    <?php 
    echo $_GET["email"];
    ?> -->

	<?php
       if(isset($_GET["username"]) AND isset($_GET["email"])){
       
       echo "Welcome ".$_GET["username"] ."!<br>";
       echo "Your email address is : ".$_GET["email"];
       
       }else{
       echo "Maaf anda harus mengakses halaman ini dari form_1.html";
       }
    ?> 
</body>
</html>