<html>
<head>
	<title>Lista de direcciones</title>
</head>
<body>
<h1>Lista de direcciones</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Registrar nueva direccion.</a></p>

<table>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Telefono casa</th>
		<th>Direccion casa</th>
		<th>Telefono trabajo</th>
		<th>Direccion trabajo</th>
		<th>Correo electronico</th>
	</tr>

<?php
foreach ($direcciones as $direccion)
{
?>
	<tr>
		<td><?php echo $direccion->nombre; ?></td>
		<td><?php echo $direccion->apellido; ?></td>
		<td><?php echo $direccion->telefono_casa; ?></td>
		<td><?php echo $direccion->direccion; ?></td>
		<td><?php echo $direccion->telefono_trabajo; ?></td>
		<td><?php echo $direccion->direccion_trabajo; ?></td>
		<td><?php echo $direccion->correo; ?></td>
	</tr>

<?php
}
?>

</table>

<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Registrar nueva direccion.</a></p>
</body>
</html>