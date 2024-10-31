<!-- Ejercicio 5 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Ordenar un array numérico: Crea un array con los nombres de 7 deportes en desorden. Ordena el array alfabéticamente y muestra el array ordenado. -->
<!-- Fecha 31/10/2024 -->
<?php
$deportes = array("Futbol", "Baloncesto", "Rugbi", "Natacion", "Boxeo", "Ajedrez", "Lucha libre");
asort($deportes);
foreach ($deportes as $x) {
    echo "$x <br>";
}
?>