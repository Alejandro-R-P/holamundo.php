<!-- Ejercicio 3 Bucles Loops por Alejandro Ruiz Polo -->
<!-- Crea un programa igual que el anterior pero que lance el dado mientras la suma total sea menor que 100. -->
<!-- Fecha 30/10/2024 -->
<?php
// Variable para almacenar la suma acumulada de los valores de los lanzamientos
$sumaAcumulada = 0;


// Bucle para simular lanzamientos hasta que la suma acumulada sea igual o mayor a 100
while ($sumaAcumulada < 100) {
    // Incrementa el número de lanzamiento
    $lanzamientoNumero++;
    
    // Genera un número aleatorio entre 1 y 6, simulando el lanzamiento de un dado
    $valorDado = rand(1, 6);
    
    // Suma el valor del dado a la suma acumulada
    $sumaAcumulada += $valorDado;
    
    // Muestra el número de lanzamiento, el valor del dado y la suma acumulada en formato tabla
    echo "Lanzamiento " . str_pad($lanzamientoNumero, 3, ' ', STR_PAD_LEFT) . " | " . 
         "Valor del ado " . str_pad($valorDado, 3, ' ', STR_PAD_LEFT) . " | " . 
         "Acumulado " . str_pad($sumaAcumulada, 4, ' ', STR_PAD_LEFT) . "<br>";
}
?>