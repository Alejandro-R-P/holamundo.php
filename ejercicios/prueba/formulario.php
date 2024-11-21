<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario</title>
</head>
<body>
<form action="procesar.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" required><br><br>
<label for="apellido">Apellido:</label>
<input type="text" id="apellido" name="apellido" required><br><br>
<label for="numero1">Número 1:</label>
<input type="number" id="numero1" name="numero1" required><br><br>

<label for="numero2">Número 2:</label>
<input type="number" id="numero2" name="numero2" required><br><br>

<input type="submit" value="Aceptar">
<input type="reset" value="Borrar">
</form>
</body>
</html>