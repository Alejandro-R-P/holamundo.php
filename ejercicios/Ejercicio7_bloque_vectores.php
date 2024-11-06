<!-- Ejercicio 7 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Añadir elementos a un array asociativo: Crea un array asociativo vacío. Añade tres pares de clave-valor (nombre de país y capital) al array y muestra el array completo. -->
<!-- Fecha 06/11/2024 -->
<?php

$paises = array();

// Añadir pares de clave-valor al array
$paises["España"] = "Madrid";
$paises["Francia"] = "París";
$paises["Italia"] = "Roma";

// Mostrar el array completo
foreach ($paises as $pais => $capital) {
    echo "País: $pais, Capital: $capital <br>";
}
?>