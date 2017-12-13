<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'toko_online';

$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: ".$mysqli->connect_error;
}

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
		<td>
	      		Name
		</td>
		<td>
	      		Harga
		</td>
		<td>
	      		Rating
		</td>
	</tr>

	<?php while($row = $result->fetch_assoc()):	?>
		<tr>
			<td>
				<?php echo $row['name']		?>
			</td>
			<td>
				<?php echo number_format($row['price'],0,',','.');	?>
			</td>
			<td>
				<?php echo $row['rating']	?>
			</td>
		</tr>
	<?php endwhile;	?>
</table>

<?php $result = $mysqli->query($query);	?>

<?php while($row = $result->fetch_assoc()):	?>
	<pre>
		<?php print_r($row);	?>
	</pre>
<?php endwhile;	?>


