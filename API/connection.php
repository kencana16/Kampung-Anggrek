<?php 
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'id13358533_user');
	define('PASSWORD', '1M!eZoc@/RX{L]4E');
	define('DB_SELECT', 'id13358533_kampunganggrek');
	$koneksi = new mysqli(HOSTNAME,USERNAME,PASSWORD,DB_SELECT) 
	or die (mysqli_errno());
?>