<?php
include 'conectar.php';

try {
    // ID del registro que se va a eliminar
    $id = 11;

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM usuarios WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "El registro con ID $id no existe.";
    }
} catch (exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar la conexión
    $conn->close();
}
?>