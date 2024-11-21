<?php
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    try {
        $sql = "UPDATE usuarios SET nombre=?, apellido=?, email=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nombre, $apellido, $email, $id);
        $stmt->execute();
        $mensaje = "Usuario actualizado exitosamente.";
    } catch (mysqli_sql_exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>
