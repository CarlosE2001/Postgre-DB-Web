<html>
<head>
	<title>Lista de direcciones</title>
</head>
<body>
<h1>Lista de direcciones</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver todas las direcciones.</a></p>
<form name="visita" id="visita" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="action" type="hidden" value="grabe" />
  <p>Este formulario permite registrar nuevas direcciones.</p>
  <p>Nombre:
    <input name="nombre" type="text" id="nombre" size="51" maxlength="50" />
  </p>
  <p>Apellidos:
    <input name="apellido" type="text" id="apellido" size="51" maxlength="50" />
  </p>
  <p>Telefono casa:
    <input name="telefono" type="text" id="telefono_casa" size="51" maxlength="50" />
  </p>
  <p>Direccion casa:
    <input name="direccion" type="text" id="direccion" size="51" maxlength="50" />
  </p>
  <p>Telefono trabajo:
    <input name="telefono_trabajo" type="text" id="telefono_trabajo" size="51" maxlength="50" />
  </p>
  <p>Direccion trabajo:
    <input name="direccion_trabajo" type="text" id="direccion_trabajo" size="51" maxlength="50" />
  </p>
  <p>Correo electronico:
    <input name="correo" type="text" id="correo" size="51" maxlength="50" />
  </p>
  <p>
    <input name="Enviar" type="submit" id="Enviar" />
  </p>
</form>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver todas las direcciones.</a></p>
</body>
</html>