<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $opcion = $_POST['opcion'];

    $errores = [];

    // Validar que el nombre no esté vacío y contenga solo letras y espacios
    if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }

    // Validar el correo electrónico con una expresión regular
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $errores[] = "El correo electrónico tiene un formato inválido.";
    }

    // Validar que el comentario no esté vacío
    if (empty($comentario)) {
        $errores[] = "El comentario no puede estar vacío.";
    }

    // Validar que se haya seleccionado una opción
    if (empty($opcion)) {
        $errores[] = "Debe seleccionar una opción.";
    }

    // Si hay errores, mostrar los mensajes y detener el procesamiento
    if (!empty($errores)) {
        header("HTTP/1.1 400 Bad Request");
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        exit; // Detener la ejecución del script
    }

    // Si todo es válido, puedes procesar los datos
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Comentario: " . htmlspecialchars($comentario) . "<br>";
    echo "Opción seleccionada: " . htmlspecialchars($opcion) . "<br>";

    // Aquí puedes realizar otras acciones como guardar en base de datos o enviar un correo.
}
?>
