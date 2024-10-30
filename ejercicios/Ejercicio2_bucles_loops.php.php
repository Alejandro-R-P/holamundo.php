<!-- Ejercicio 2 Bucles Loops por Alejandro Ruiz Polo -->
<!-- Crea un programa que simule el lanzamiento de un dado 10 veces. Lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la suma acumulada. -->
<!-- Fecha 30/10/2024 -->
<?php
// Variable para almacenar la suma acumulada de los valores de los lanzamientos
$sumaAcumulada = 0;


// Bucle para simular 10 lanzamientos
for ($i = 1; $i <= 10; $i++) {
    // Genera un número aleatorio entre 1 y 6, simulando el lanzamiento de un dado
    $valorDado = rand(1, 6);
    
    // Suma el valor del dado a la suma acumulada
    $sumaAcumulada += $valorDado;
    
    // Muestra el número de lanzamiento, el valor del dado y la suma acumulada
    echo str_pad($i, 11) . " | " . str_pad($valorDado, 13) . " | " . $sumaAcumulada . "\n";
}
?>
