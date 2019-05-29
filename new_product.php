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
	<title>Nuevo producto</title>
</head>
<body>
	<h1>Nuevo producto</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_newProduct.php" method="post">
		
		<div>
			<label>Nombre</label>
			<input type="text" name="name" required="required">
		</div>
		<div>
			<label>Precio</label>
			<input type="number" name="price" required="required">
		</div>
		<div>
			<button>Registrar</button>
		</div>
	</form>
</body>
</html>