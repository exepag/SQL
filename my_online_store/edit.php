<?php require('connection.php'); ?>

<?php
$id = $_GET['id'];
$query = "Select * from products where id=$id";
$result = $mysqli->query($query);

if ($mysqli->error) {
   echo $mysqli->error;
   echo PHP_EOL;
   die();
}

$row = $result->fetch_assoc();
?>

<form method="post">
   Nama <input type="text" name="name" value="<?php echo $row['name'] ?>"> <br />
   Harga <input type="text" name="price" value="<?php echo $row['price'] ?>"> <br />
   Rating <input type="text" name="rating" value="<?php echo $row['rating'] ?>"> <br />
   <button type="submit">Simpan</button>
</form>

<?php

if ($_POST) {
   if (isset($_POST['name'])) {
     $name = $_POST['name'];
   }
   if (isset($_POST['price'])) {
     $price = $_POST['price'];
   }
   if (isset($_POST['rating'])) {
     $rating = $_POST['rating'];
   }

   $query = "UPDATE products SET name='$name', price='$price', rating='$rating' WHERE id=$id";

   $result = $mysqli->query($query);
   if ($result == true) {
     echo "Data berhasil disimpan";
   } else {
     echo "Data gagal disimpan";
   }
   
}
