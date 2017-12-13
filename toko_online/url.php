<?php require('connection.php');	

<?php
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
		<td>
	      		Lihat	
		</td>

	</tr>

	<?php while($row = $result->fetch_assoc()):	?>
		
	<?php $url = "/detail.php?id=".$row['id'];	?>
		
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
			<td>
				<a href="<?php echo $url ?>">
					LIHAT
				</a>
			</td>
		</tr>
	<?php endwhile;	?>
</table>


