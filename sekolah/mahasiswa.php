<?php require('koneksi.php'); 

$brandQuery = "select * from kelas";
$brandResult = $mysqli->query($brandQuery);

$query = "SELECT * FROM `siswa`";

$result = $mysqli->query($query);

if ($mysqli->error) {
	echo $mysqli->error;
	echo PHP_EOL;
	die();
}
?>
<table border="1">
	<tr>
	   <td>NIM</td>
	   <td>Nama</td>
	   <td>Jenis_kelamin</td>
	   <td>Lihat</td>
	</tr>

<?php while ($row = $result->fetch_assoc()): ?>

<?php $url = "/rinci.php?id=".$row['id']; ?>					<!-- Buat detail URL -->

	<tr>
	   <td><?php echo $row['NIM'] ?></td>
	   <td><?php echo $row['nama'] ?></td>
	   <td><?php echo $row['jenis_kelamin'] ?></td>
	   <td><a href="<?php echo $url ?>">LIHAT</a></td>			<!-- Print URL -->
	</tr>
<?php endwhile; ?>
</table>


