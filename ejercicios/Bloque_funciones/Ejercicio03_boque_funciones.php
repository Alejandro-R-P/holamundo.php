<!-- Ejercicio 3 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Escribe una función en PHP que convierta grados Celsius en Fahrenheit y viceversa. 
La función debe recibir el número y la escala (C o F). 
Si la escala es "C", convierte de Celsius a Fahrenheit usando la fórmula F=C×9/5+32.
Si la escala es "F", convierte de Fahrenheit a Celsius usando la fórmula C=(F−32)×5/9.
Si la escala no es válida, devuelve un mensaje de error.-->
<!-- Fecha 14/11/2024 -->
<?php
function convertirTemperatura($grados, $escala) {
    // Convertimos según la escala proporcionada
    if ($escala === "C") {
        // De Celsius a Fahrenheit
        $resultado = $grados * 9 / 5 + 32;
        $nuevaEscala = "F";
    } elseif ($escala === "F") {
        // De Fahrenheit a Celsius
        $resultado = ($grados - 32) * 5 / 9;
        $nuevaEscala = "C";
    } else {
        // Escala no válida
        return "Error: La escala debe ser 'C' para Celsius o 'F' para Fahrenheit.";
    }

    // Retornamos el resultado con la escala convertida
    return round($resultado, 2) . "°" . $nuevaEscala;
}

echo convertirTemperatura(20, "C") . "\n"; // Convierte 100°C a Fahrenheit
echo convertirTemperatura(100, "F") . "\n"; // Convierte 212°F a Celsius
?>
