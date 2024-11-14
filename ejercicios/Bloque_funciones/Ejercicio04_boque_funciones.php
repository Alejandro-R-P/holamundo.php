<!-- Ejercicio 4 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Escribe una función que calcule el área y el perímetro de un rectángulo. 
    La función debe recibir el largo y el ancho como parámetros y devolver un array con el área y el perímetro. -->
<!-- Fecha 14/11/2024 -->
<?php
function calcularAreaYPerimetro($largo, $ancho) {
    // Calculamos el área
    $area = $largo * $ancho;

    // Calculamos el perímetro
    $perimetro = 2 * ($largo + $ancho);

    // Retornamos un arreglo con el área y el perímetro
    return [
        "area" => $area,
        "perimetro" => $perimetro
    ];
}

// Ejemplo de uso
$largo = 5;
$ancho = 3;
$resultado = calcularAreaYPerimetro($largo, $ancho);
echo "Área: " . $resultado["area"] . "\n";
echo "Perímetro: " . $resultado["perimetro"] . "\n";
?>

