
<!-- Ejercicio 7 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Escribe una función que reciba una serie de números como parámetro, 
la cantidad de números puede ser variable, y devuelva el número que más veces aparece -->
<!-- Fecha 14/11/2024 -->
<?php
function numeroMasFrecuente(...$numeros) {
    // Verificamos que se hayan pasado números
    if (empty($numeros)) {
        return "Error: No se han pasado números.";
    }

    // Contamos la frecuencia de cada número
    $frecuencias = array_count_values($numeros);

    // Buscamos el número con la mayor frecuencia
    $numeroMasFrecuente = array_search(max($frecuencias), $frecuencias);

    return $numeroMasFrecuente;
}

// Ejemplo de uso
echo "Número más frecuente: " . numeroMasFrecuente(1, 2, 1, 2 ,1, 2, 1, 2, 1, 2) . "\n";
?>