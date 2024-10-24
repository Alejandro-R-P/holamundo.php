<!-- Ejercicio 3 Bloques condicionales por Alejandro Ruiz Polo -->
<!-- Fecha 24/10/2024 -->
<?php
$n1 = rand(1, 7);
switch ($n1){
    case "1";
    echo "$n1 lunes";
    break;
    case "2";
    echo "$n1 martes";
    break;
    case "3";
    echo "$n1 miercoles";
    break;
    case "4";
    echo "$n1 jueves";
    break;
    case "5";
    echo "$n1 viernes";
    break;
    case "6";
    echo "$n1 sabado";
    break;
    case "7";
    echo "$n1 domingo";
    break;
}