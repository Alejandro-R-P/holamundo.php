<!-- Ejercicio 10 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Ordenar un array asociativo por clave Crea un array asociativo con 5 nombres de empleados y sus salarios. Ordena el array por nombre en orden ascendente y muestra el array ordenado. -->
<!-- Fecha 06/11/2024 -->
<?php

$empleados = array(
    "Pepe" => 1000,
    "Juan" => 1500,
    "Paco" => 1800,
    "Antonio" => 2200,
    "Alberto" => 1700
);

// Ordenar el array por clave (nombre) en orden ascendente
ksort($empleados);

// Mostrar el array ordenado
foreach ($empleados as $nombre => $salario) {
    echo "Empleado: $nombre, Salario: $salario <br>";
}
?>
