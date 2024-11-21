<?php
if (isset($_GET['borrar'])) {
    $id = $_GET['borrar'];

    try {
        $sql = "DELETE FROM usuarios WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $mensaje = "Usuario eliminado exitosamente.";
    } catch (mysqli_sql_exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>
