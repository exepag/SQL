<?php require('koneksi.php'); ?>

<?php
$id = $_GET['id'];
$query = "Select * from siswa where id=$id";		// query String
$result = $mysqli->query($query);			// result Object

if ($mysqli->error) {
   echo $mysqli->error;
   echo PHP_EOL;
   die();
}

$row = $result->fetch_assoc();				// Object nya pakai fetch_assoc paling byk digunakan
?>

NIM:	<h2><?php echo $row['NIM'] ?></h2> <br />
Nama:	<?php echo $row['nama'] ?> <br />
Jenis Kelamin:	<?php echo $row['jenis_kelamin'] ?> <br />

<form method="post" action="/hapus.php">
   <input type="hidden" name="id" value="<?php echo $id ?>" />
   <input type="submit" value="Hapus" />
</form>

<?php
$editURL = "/rubah.php?id=$id";
?>

<a href="<?php echo $editURL ?>">EDIT</a>

