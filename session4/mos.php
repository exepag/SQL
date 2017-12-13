<?php

//test koneksi mysql dari PHP
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'my_online_store';

//1.Buat object mysqli.
$mysqli = new mysqli($host, $user, $password, $database);

//2.Cek ada error atau tidak.
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL:" .$mysqli->connect_error;
} else {
	echo "Connection Success";
}
