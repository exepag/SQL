<?php require('connection.php'); ?>

<?php
$id = $_GET['id'];
$query = "Select * from products where id=$id";		// query String
$result = $mysqli->query($query);			// result Object

if ($mysqli->error) {
   echo $mysqli->error;
   echo PHP_EOL;
   die();
}

$row = $result->fetch_assoc();				// Object nya pakai fetch_assoc paling byk digunakan
?>

Nama:	<h2><?php echo $row['name'] ?></h2> <br />
Harga:	<?php echo $row['price'] ?> <br />
Rating:	<?php echo $row['rating'] ?> <br />

<form method="post" action="/delete.php">
   <input type="hidden" name="id" value="<?php echo $id ?>" />
   <input type="submit" value="Hapus" />
</form>

<?php
$editURL = "/edit.php?id=$id";
?>

<a href="<?php echo $editURL ?>">EDIT</a>
