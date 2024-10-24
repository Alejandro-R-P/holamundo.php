<!-- Ejercicio 1 Bloques condicionales por Alejandro Ruiz Polo -->
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