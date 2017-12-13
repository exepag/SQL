<?php require('koneksi.php'); ?>

<form method="post">
	NIM		<input type="text" name="nomer">		<br />
	Nama		<input type="text" name="nama">			<br />		
	Jenis Kelamin	<input type="text" name="jenis">		<br />
	<button type="submit">	Daftar	</button>
</form>


<?php

if($_POST) {

	if(isset($_POST['nomer'])) {
	   $induk = $_POST['nomer'];
	}
	
	if(isset($_POST['nama'])) {
	   $siswa = $_POST['nama'];
	}

	if(isset($_POST['jenis'])) {
	   $kelamin = $_POST['jenis'];
	}

	$query = "INSERT INTO siswa(NIM, nama, jenis_kelamin) 
		  VALUES('$induk','$siswa','$kelamin')";

	$result = $mysqli->query($query);
	if ($result == true) {
	   echo "Database berhasil disimpan";
	} else {
	   echo "Database gagal disimpan";
	}
}
