<!-- Ejercicio 1 Bloques condicionales por Alejandro Ruiz Polo -->
<!-- Crea un programa en php con una variable $numero con un valor aleatoria entre -10 y 10. El programa debe escribir un mensaje indicando si número es positivo, negativo o cero. -->
<!-- Fecha 24/10/2024 -->
<?php
$numero = rand(-10, 10);
if ($numero > 0 ){
    echo "el numero $numero es positivo";
}
elseif ($numero == 0 ){
    echo "el numero $numero es cero";
}
else{
    echo "El numero $numero es negativo ";
}
?>