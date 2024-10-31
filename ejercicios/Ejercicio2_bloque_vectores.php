<!-- Ejercicio 2 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Añadir elementos a un array numérico: Crea un array vacío. Añade cinco nombres de ciudades al array y muestra el array completo en pantalla. -->
<!-- Fecha 31/10/2024 -->
<?php
$ciudades = array();
$ciudades[0] = "Madrid";
$ciudades[1] = "Barcelona";
$ciudades[2] = "Valencia";
$ciudades[3] = "Zaragoza";
$ciudades[4] = "Murcia";
foreach ($ciudades as $x) {
    echo "$x <br>";
}
?>