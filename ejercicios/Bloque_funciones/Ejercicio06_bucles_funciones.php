<!-- Ejercicio 6 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Escribe una función que calcule el promedio y la mediana de un array de números. 
La función debe recibir el array y devolver un array con el promedio y la mediana. -->
<!-- Fecha 14/11/2024 -->
<?php
function calcularPromedioYMediana($numeros) {
    // Verificamos que el array no esté vacío
    if (empty($numeros)) {
        return "Error: El array está vacío.";
    }

    // Calcular el promedio
    $suma = array_sum($numeros);
    $cantidad = count($numeros);
    $promedio = $suma / $cantidad;

    // Calcular la mediana
    sort($numeros); // Ordenamos el array de menor a mayor
    $medio = floor($cantidad / 2);

    if ($cantidad % 2 == 0) {
        // Si la cantidad es par, la mediana es el promedio de los dos valores centrales
        $mediana = ($numeros[$medio - 1] + $numeros[$medio]) / 2;
    } else {
        // Si la cantidad es impar, la mediana es el valor central
        $mediana = $numeros[$medio];
    }

    // Retornamos un arreglo con el promedio y la mediana
    return [
        "promedio" => round($promedio, 2), // Redondeamos el promedio a 2 decimales
        "mediana" => $mediana
    ];
}

// Ejemplo de uso
$numeros = [1, 2, 6, 2];
$resultado = calcularPromedioYMediana($numeros);
echo "Promedio: " . $resultado["promedio"] . "\n";
echo "Mediana: " . $resultado["mediana"] . "\n";
?>
