<?php require('koneksi.php'); ?>

<?php
$id = $_GET['id'];
$query = "Select * from siswa where id=$id";
$result = $mysqli->query($query);

if ($mysqli->error) {
   echo $mysqli->error;
   echo PHP_EOL;
   die();
}

$row = $result->fetch_assoc();
?>

<form method="post">
   NIM <input type="text" name="nomer" value="<?php echo $row['NIM'] ?>"> <br />
   Nama <input type="text" name="nama" value="<?php echo $row['nama'] ?>"> <br />
   Jenis Kelamin <input type="text" name="jenis" value="<?php echo $row['jenis_kelamin'] ?>"> <br />
   <button type="submit">Simpan</button>
</form>

<?php

if ($_POST) {
   if (isset($_POST['nomer'])) {
     $induk = $_POST['nomer'];
   }
   if (isset($_POST['nama'])) {
     $siswa = $_POST['nama'];
   }
   if (isset($_POST['jenis'])) {
     $kelamin = $_POST['jenis'];
   }

   $query = "UPDATE siswa SET NIM='$induk', nama='$siswa', jenis_kelamin='$kelamin' WHERE id=$id";

   $result = $mysqli->query($query);
   if ($result == true) {
     echo "Data berhasil disimpan";
   } else {
     echo "Data gagal disimpan";
   }
   
}

