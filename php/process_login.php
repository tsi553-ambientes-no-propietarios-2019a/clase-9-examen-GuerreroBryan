<?php 
include('../common/utils.php');
if($_POST) {
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *
		FROM user
		WHERE usuario='$username'
		AND clave=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
						'rol' => $row['rol'],
						'username' => $row['usuario'],
						'id' => $row['id']
					];
					if ($_SESSION['user']['rol'] == 'Administrador') {
						redirect('../admin.php');
					}elseif ($_SESSION['user']['rol'] == 'Cliente') {
						redirect('../cliente.php');
					}
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}


	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../index.php');
}