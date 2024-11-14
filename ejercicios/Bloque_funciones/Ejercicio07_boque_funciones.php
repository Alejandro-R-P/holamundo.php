<!-- Ejercicio 7 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Escribe una función que reciba un precio y un descuento 
    y devuelva el precio una vez aplicado el descuento. -->
<!-- Fecha 14/11/2024 -->
<?php
function calcularPrecioConDescuento($precio, $descuento) {
    // Verificamos que el precio y el descuento sean válidos
    if ($precio < 0 || $descuento < 0 || $descuento > 100) {
        return "Error: El precio o el descuento no son válidos.";
    }

    // Calculamos el precio con el descuento aplicado
    $precioFinal = $precio - ($precio * ($descuento / 100));

    // Retornamos el precio final redondeado a 2 decimales
    return round($precioFinal, 2);
}

// Ejemplo de uso
$precio = 100;    // Precio original
$descuento = 20;  // Descuento en porcentaje

echo "Precio final: $" . calcularPrecioConDescuento($precio, $descuento) . "\n";
?>
