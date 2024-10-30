<!-- Ejercicio 3 Bloques condicionales por Alejandro Ruiz Polo -->
<!-- Crea un programa en php con tres variables aleatorias $n1,$n2,$n3. El programa mostrará sus valores y posteriormente las mostrará los números ordenados de mayor a menor. -->
<!-- Fecha 24/10/2024 -->
<?php
$n1 = rand(-10, 10);
$n2 = rand(-10, 10);
$n3 = rand(-10, 10);
echo $n1 . " " . $n2 . " " . "y" . " " . $n3;
echo '<br>';
if ($n1 < $n2){
$swap=$n1;
$n1=$n2;
$n2=$swap;
echo $n1 . " " . $n2 . " " . "y" . " " . $n3;
}
elseif ($n2 < $n3){
    $swap=$n2;
    $n2=$n3;
    $n3=$swap;
    echo $n1 . " " . $n2 . " " . "y" . " " . $n3;
    }
?>