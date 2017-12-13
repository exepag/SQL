<?php require('connection.php'); 

$brandQuery = "select * from brands";
$brandResult = $mysqli->query($brandQuery);

$query = "
SELECT `products`.*, `brands`.name as brand_name 
FROM `products` 
JOIN `brands` on `brands`.id = `products`.`brand_id`
";

if (isset($_GET['brand']) && $_GET['brand'] !=0 ) {
	$query .= "WHERE `products`.brand_id=".$_GET['brand'];
}

$result = $mysqli->query($query);

if ($mysqli->error) {
	echo $mysqli->error;
	echo PHP_EOL;
	die();
}
?>
<form>
Brand:
	<select name="brand">
			<option value="0">Semua</option>
		<?php while ($row = $brandResult->fetch_assoc()): ?>
			<option value="<?php echo $row['id']?>">
				<?php echo $row['name']; ?>
			</option>
		<?php endwhile; ?>
	</select>
<button type="submit">Apply</button>
</form>

<table border="1">
	<tr>
	   <td>Name</td>
	   <td>Harga</td>
	   <td>Rating</td>
	   <td>Brand</td>
	   <td>Lihat</td>
	</tr>

<?php while ($row = $result->fetch_assoc()): ?>

<?php $url = "/detail.php?id=".$row['id']; ?>					<!-- Buat detail URL -->

	<tr>
	   <td><?php echo $row['name'] ?></td>
	   <td><?php echo number_format($row['price'],0,',','.'); ?></td>
	   <td><?php echo $row['rating'] ?></td>
	   <td><?php echo $row['brand_name'] ?></td>
	   <td><a href="<?php echo $url ?>">LIHAT</a></td>			<!-- Print URL -->
	</tr>
<?php endwhile; ?>
</table>

