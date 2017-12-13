<?php require('connection.php'); ?>

<?php
$id = $_POST['id'];
$query = "DELETE from products where id=$id";
$result = $mysqli->query($query);

if ($mysqli->error) {
   echo $mysqli->error;
   echo PHP_EOL;
   die();
}

if ($result) {
   echo "Data berhasil dihapus.";
}
