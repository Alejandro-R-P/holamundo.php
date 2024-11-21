<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edad</title>
</head>
<body>
    <h2>Introduce tu fecha de nacimiento (formato: DD/MM/YYYY)</h2>
    <form action="" method="POST">
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="DD/MM/YYYY" required>
        <button type="submit">Calcular Edad</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la fecha de nacimiento
        $fecha_nacimiento = $_POST['fecha_nacimiento'];

        // Validar el formato de la fecha (DD/MM/YYYY)
        if (preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/", $fecha_nacimiento, $coincidencias)) {
            // Extraer día, mes y año
            $dia = $coincidencias[1];
            $mes = $coincidencias[2];
            $año = $coincidencias[3];

            // Verificar si la fecha es válida
            if (checkdate($mes, $dia, $año)) {
                // Convertir la fecha de nacimiento a un objeto DateTime
                $fecha_nacimiento_obj = new DateTime("$año-$mes-$dia");
                $fecha_actual = new DateTime(); // Fecha actual
                $edad = $fecha_nacimiento_obj->diff($fecha_actual)->y; // Diferencia en años

                echo "<h3>Tu edad es: $edad años.</h3>";
            } else {
                echo "<h3>La fecha ingresada no es válida. Por favor, ingresa una fecha correcta.</h3>";
            }
        } else {
            echo "<h3>Por favor, ingresa una fecha válida en el formato DD/MM/YYYY.</h3>";
        }
    }
    ?>
</body>
</html>