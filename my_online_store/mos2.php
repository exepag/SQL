<?php require('connection.php'); ?>

<form method="post">
	Nama <input type="text" name="name"><br />
	Harga <input type="text" name="price"><br />
	Rating <input type="text" name="rating"><br />
	<button type="submit">Simpan</button>
</form>

<?php

if($_POST) {

	if(isset($_POST['name'])) {
	   $name = $_POST['name'];
	}
	
	if(isset($_POST['price'])) {
	   $price = $_POST['price'];
	}

	if(isset($_POST['rating'])) {
	   $rating = $_POST['rating'];
	}

	$query = "INSERT INTO products(name, price, rating) 
		  VALUES('$name','$price','$rating')";

	$result = $mysqli->query($query);
	if ($result == true) {
	   echo "Database berhasil disimpan";
	} else {
	   echo "Database gagal disimpan";
	}
}
