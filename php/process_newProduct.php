<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['name']) && isset($_POST['price']) && !empty($_POST['name']) && !empty($_POST['price'])) {
	
		$name = $_POST['name'];
		$price = $_POST['price'];
		

		$sql_insert = "INSERT INTO product
		(name, price)
		VALUES ('$name','$price')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../home.php');
		}
	} else {
		redirect('../new_product.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../new_product.php');
}