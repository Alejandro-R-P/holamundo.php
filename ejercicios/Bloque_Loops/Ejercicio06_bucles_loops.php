<!-- Ejercicio 6 Bucles Loops por Alejandro Ruiz Polo -->
<!-- Crea un programa con una variable $n1 a la que daremos valor en el código. El programa mostrará todos los divisores de ese número -->
<!-- Fecha 31/10/2024 -->
<?php
// Asignamos un valor a la variable $n1
$n1 = -36; // Puedes cambiar este valor por el que desees

if ($n1 < 0) {
    $n1 = abs($n1);
}
// Mostramos los divisores
echo "Los divisores de $n1 son: ";

for ($i=abs($n1);$i>=1;$i--) {
    if (abs($n1) % $i == 0) {
        echo $i!=1? "$i, ": "$i." ; // Imprime el divisor
    }
}
?>
