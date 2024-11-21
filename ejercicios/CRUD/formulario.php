<?php
include 'conectar.php';

// Variables para mensajes
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Manejo de las opciones de acuerdo con la acción elegida
    if (isset($_POST['crear'])) {
        include 'crear2.php';  // Llamar a la lógica para crear
    } elseif (isset($_POST['actualizar'])) {
        include 'actualizar2.php';  // Llamar a la lógica para actualizar
    }
}

// Mostrar usuarios si se selecciona leer
include 'leer2.php'; 

// Manejar eliminar si se hace clic en "Borrar"
include 'borrar2.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CRUD - Gestionar Usuarios</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
        h1, h2 { color: #333; }
        form { margin-bottom: 20px; }
        input[type="text"], input[type="email"], input[type="number"] { padding: 8px; margin: 5px 0; width: 200px; }
        button { padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: center; }
        .mensaje { padding: 10px; margin-bottom: 20px; background-color: #dff0d8; color: #3c763d; }
    </style>
</head>
<body>
    <h1>Formulario de Gestión de Usuarios</h1>

    <!-- Mostrar mensaje de éxito o error -->
    <?php if ($mensaje): ?>
        <div class="mensaje"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <!-- Opciones para elegir el tipo de acción -->
    <form method="POST">
        <label for="accion">Seleccione una acción:</label>
        <select name="accion" id="accion" onchange="mostrarFormulario(this.value)">
            <option value="">Seleccione...</option>
            <option value="crear">Crear Usuario</option>
            <option value="actualizar">Actualizar Usuario</option>
            <option value="borrar">Borrar Usuario</option>
            <option value="leer">Ver Usuarios</option>
        </select>
    </form>

    <div id="formulario">
        <!-- Formulario se mostrará dependiendo de la opción seleccionada -->
        <form method="POST" id="formCrear" style="display:none;">
            <h2>Crear Nuevo Usuario</h2>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <button type="submit" name="crear">Crear</button>
        </form>

        <form method="POST" id="formActualizar" style="display:none;">
            <h2>Actualizar Usuario</h2>
            <input type="number" name="id" placeholder="ID del usuario a actualizar" required>
            <input type="text" name="nombre" placeholder="Nuevo nombre" required>
            <input type="text" name="apellido" placeholder="Nuevo apellido" required>
            <input type="email" name="email" placeholder="Nuevo correo" required>
            <button type="submit" name="actualizar">Actualizar</button>
        </form>

        <form method="POST" id="formBorrar" style="display:none;">
            <h2>Borrar Usuario</h2>
            <input type="number" name="id" placeholder="ID del usuario a borrar" required>
            <button type="submit" name="borrar">Borrar</button>
        </form>
    </div>

    <!-- Tabla para ver los usuarios -->
    <div id="tablaUsuarios" style="display:none;">
        <h2>Usuarios Existentes</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['id']; ?></td>
                <td><?php echo $usuario['nombre']; ?></td>
                <td><?php echo $usuario['apellido']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script>
        function mostrarFormulario(accion) {
            document.getElementById("formCrear").style.display = "none";
            document.getElementById("formActualizar").style.display = "none";
            document.getElementById("formBorrar").style.display = "none";
            document.getElementById("tablaUsuarios").style.display = "none";

            if (accion === "crear") {
                document.getElementById("formCrear").style.display = "block";
            } else if (accion === "actualizar") {
                document.getElementById("formActualizar").style.display = "block";
            } else if (accion === "borrar") {
                document.getElementById("formBorrar").style.display = "block";
            } else if (accion === "leer") {
                document.getElementById("tablaUsuarios").style.display = "block";
            }
        }
    </script>
</body>
</html>
