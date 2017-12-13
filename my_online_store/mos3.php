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
}

//Gunakan require jika ingin menggunakan koneksi yang sudah ada
// require('./mos.php')

$query = "Select * from products";
$result = $mysqli->query($query);

if ($mysqli->error) {
	echo $mysqli->error;
	echo PHP_EOL;
	die();
}
?>

<table border="1">
	<tr>
	   <td>Name</td>
	   <td>Harga</td>
	   <td>Rating</td>
	   <td>Lihat</td>
	</tr>

<?php while ($row = $result->fetch_assoc()): ?>

<?php $url = "/detail.php?id=".$row['id']; ?>					<!-- Buat detail URL -->

	<tr>
	   <td><?php echo $row['name'] ?></td>
	   <td><?php echo number_format($row['price'],0,',','.'); ?></td>
	   <td><?php echo $row['rating'] ?></td>
	   <td><a href="<?php echo $url ?>">LIHAT</a></td>			<!-- Print URL -->
	</tr>
<?php endwhile; ?>
</table>

