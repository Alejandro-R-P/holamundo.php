<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "changeme";
$dbname = "prueba";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Habilitar el reporte de errores y excepciones

try {
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8mb4"); // Establecer el conjunto de caracteres
} catch (exception $e) {
    die("Conexión fallida: " . $e->getMessage());
}
?>