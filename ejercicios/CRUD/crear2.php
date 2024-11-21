<?php
if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    try {
        $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $apellido, $email);
        $stmt->execute();
        $mensaje = "Nuevo usuario creado exitosamente.";
    } catch (mysqli_sql_exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>
