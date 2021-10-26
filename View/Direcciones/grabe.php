<html>
<head>
	<title>Lista de direcciones</title>
</head>
<body>
<h1>Lista de direcciones</h1>
<p><?php echo $mensaje; ?><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Registrar nueva direccion.</a><br />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver todas las direcciones.</a></p>
</body>
</html>