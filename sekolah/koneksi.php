<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL:".$mysqli->connect_error;
}

?>
