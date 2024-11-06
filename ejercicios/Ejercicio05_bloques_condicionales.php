<!-- Ejercicio 5 Bloques condicionales por Alejandro Ruiz Polo -->
<!-- Crea un programa con una variable booleana $lluvia y una variable $temperatura a las que darás valor en el código. El programa debe dar los siguientes mensajes. 
"La temperatura es xxxx y es una temperatura extrema. No se puede realizar actividad." si la temperatura no está entre -10 y 40. Encaso contrario.
"La temperatura es xxxx y no llueve A la playa" si la temperatura es mayor que 20 y no llueve, 
"La temperatura es xxx y no llueve A esquiar" si la temperatura esté entre  y -10 y 5 y no llueve. 
"La temperatura es xxxx y no llueve. De paseo" si la temperatura está entre 5 y 20 y7 no llueve.
"Hoy llueve y debes quedarte en casa" si llueve y la temperatura está entre -10 y 40.
-->
<!-- Fecha 24/10/2024 -->
<?php
$lluvia = (bool)rand(0, 1);
$temperatura = rand(-20, 50);
if ($temperatura < -10 || $temperatura > 40) {
    echo "La temperatura es $temperatura y es una temperatura extrema. No se puede realizar actividad.";
} elseif ($lluvia) {
    echo "Hoy llueve y debes quedarte en casa.";
} else {
    if ($temperatura > 20) {
        echo "La temperatura es $temperatura y no llueve. A la playa.";
    } elseif ($temperatura >= -10 && $temperatura <= 5) {
        echo "La temperatura es $temperatura y no llueve. A esquiar.";
    } elseif ($temperatura > 5 && $temperatura <= 20) {
        echo "La temperatura es $temperatura y no llueve. De paseo.";
    }
}
?>