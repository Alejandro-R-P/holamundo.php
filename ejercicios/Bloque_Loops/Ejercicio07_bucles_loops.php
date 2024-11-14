<?php

// Asignamos un valor a la variable $n1
$n1 = 58; // Cambia este valor por el que desees

// Contador de divisores
$contadorDivisores = 0;

// Mostramos los divisores
echo "Los divisores de $n1 son: ";


for ($i = 1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo $i . ", "; // Imprime el divisor
        $contadorDivisores++; // Aumenta el contador de divisores
    }
}
echo "<br>";
// Verificamos si es primo (un número primo tiene exactamente 2 divisores: 1 y el mismo)
if ($contadorDivisores == 2 && $n1 > 1) {
    echo "$n1 es un número primo.";
} else {
    echo "$n1 no es un número primo.";
}
?>
