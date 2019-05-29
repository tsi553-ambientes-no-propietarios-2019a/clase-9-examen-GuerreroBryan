<?php 
include('common/utils.php');
//print_r($_SESSION['user']);
$products = getProducts($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>HOLA: <?php echo $_SESSION['user']['rol']; ?></h2>

	<a href="new_product.php">Añadir producto</a>

	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
</table>
</body>
</html>