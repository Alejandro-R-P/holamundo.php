<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $opcion = $_POST['opcion'];

    // Validar que todos los campos están llenos
    if (empty($nombre) || empty($email) || empty($comentario) || empty($opcion)) {
        header("HTTP/1.1 400 Bad Request");
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Validar formato del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("HTTP/1.1 400 Bad Request");
        echo "El formato del email es inválido.";
        exit;
    }

    // Validar que el email pertenezca a la organización @iespabloserrano.com
    $dominioPermitido = "@iespabloserrano.com";
    if (substr($email, -strlen($dominioPermitido)) !== $dominioPermitido) {
        header("HTTP/1.1 400 Bad Request");
        echo "El correo electrónico debe pertenecer a la organización @iespabloserrano.com.";
        exit;
    }

    // Si todo está bien, procesar los datos (por ejemplo, mostrarlos)
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Comentario: " . htmlspecialchars($comentario) . "<br>";
    echo "Opción seleccionada: " . htmlspecialchars($opcion) . "<br>";

    // Aquí puedes realizar otras acciones como guardar en base de datos o enviar un correo.
}
?>
