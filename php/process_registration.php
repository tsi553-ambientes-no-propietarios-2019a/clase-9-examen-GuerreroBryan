<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['nombre']) && isset($_POST['rol']) && isset($_POST['usuario']) && isset($_POST['password1']) && 
	!empty($_POST['nombre']) && !empty($_POST['rol']) && !empty($_POST['usuario']) && !empty($_POST['password1'])) {

		$name = $_POST['nombre'];
		$rol = $_POST['rol'];
		$username = $_POST['usuario'];
		$password1 = $_POST['password1'];


		$sql_insert = "INSERT INTO user
		(nombre, rol, usuario, clave)
		VALUES ('$name','$rol','$username' , MD5('$password1'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../registration.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registration.php');
}