<!-- Ejercicio 1 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Genera una función que reciba como parámetro un número y devuelva un booleano indicando si es primo o no. Utiliza la función para calcular todos los primos entre uno y un millón. -->
<!-- Fecha 14/11/2024 -->
 <?php
function es_primo($n1):bool{
    $numerodivisores=0;

    for($contador=abs($n1);$contador>=1;$contador--){
        if (abs($n1)% $contador ==0){
            $numerodivisores ++;
        }
    }
    return ($numerodivisores==2);
}
?>
 <?php
    for($numero =1;$numero<10000;$numero++){
        echo es_primo($numero)?"$numero es primo <br>":"";
    }