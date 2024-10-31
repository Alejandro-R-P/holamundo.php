<!-- Ejercicio 5 Bucles Loops por Alejandro Ruiz Polo -->
<!-- Crea un programa con una variable $n1 a la que daremos valor en el código. Escribe todos los números de $n1 al 0 contando hacia atrás. Si el número es negativo deberá cambiar su valor a positivo.-->
<!-- Fecha 30/10/2024 -->
<?php
// Asigna un valor a la variable $n1 (puede ser positivo o negativo)
$n1 = -68;

// Si $n1 es negativo, cambia su valor a positivo
if ($n1 < 0) {
    $n1 = abs($n1);
}

// Muestra la cuenta regresiva desde $n1 hasta 0
echo "Cuenta regresiva desde $n1 hasta 0:<br>";
for ($i = $n1; $i >= 0; $i--) {
    echo $i . "<br>";
}
?>