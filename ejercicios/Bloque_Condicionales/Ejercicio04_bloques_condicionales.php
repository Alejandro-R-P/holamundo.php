<!-- Ejercicio 3 Bloques condicionales por Alejandro Ruiz Polo -->
<!-- Crea un programa en php que genere un numero aleatorio entre 1 y 7. El programa debe mostrar el numero y el día de la semana siendo el lunes el día 1 y el domingo el 7. -->
<!-- Fecha 24/10/2024 -->
<?php
$n1 = rand(1, 7);
switch ($n1){
    case "1";
    echo "hoy es lunes";
    break;
    case "2";
    echo "hoy es martes";
    break;
    case "3";
    echo "hoy es miercoles";
    break;
    case "4";
    echo "hoy es jueves";
    break;
    case "5";
    echo "hoy es viernes";
    break;
    case "6";
    echo "hoy es sabado";
    break;
    case "7";
    echo "hoy es domingo";
    break;
}