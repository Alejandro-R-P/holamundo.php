<?php
$sql = "SELECT id, nombre, apellido, email FROM usuarios";
$result = $conn->query($sql);
$usuarios = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}
?>
