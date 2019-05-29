<?php 
include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Registro de usuarios</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration.php" method="post">
		<div>
			<label>Registro Usuario</label>
			<input type="text" name="nombre" required="required">
		</div>
		<div>
			<label>Rol de usuario</label>
			<select name="rol">    
				<option value="Cliente">Cliente</option>    
				<option value="Administrador">Administrador</option>    
			</select><br>   
		</div>
		<div>
			<label>Nombre Usuario</label>
			<input type="text" name="usuario" required="required">
		</div>
		<div>
			<label>Clave</label>
			<input type="password" name="password1" required="required">
		</div>
		<div>
			<label>Repita la clave</label>
			<input type="password" name="password2" required="required">
		</div>
		<div>
			<button>Registrarme!</button>
		</div>
	</form>
</body>
</html>