<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'toko_online';

$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: ".$mysqli->connect_error;
}


?>
