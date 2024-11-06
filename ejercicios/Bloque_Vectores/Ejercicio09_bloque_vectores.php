<!-- Ejercicio 9 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Borrar un elemento específico de un array asociativo: Crea un array asociativo con 4 marcas de autos y sus países de origen. Borra uno de los pares del array y muestra el array actualizado. -->
<!-- Fecha 06/11/2024 -->

<?php

$autos = array(
    "Toyota" => "Japón",
    "BMW" => "Alemania",
    "Ford" => "Estados Unidos",
    "Renault" => "Francia"
);

// Borrar un elemento específico del array (por ejemplo, Ford)
unset($autos["Ford"]);

// Mostrar el array actualizado
foreach ($autos as $marca => $pais) {
    echo "Marca: $marca, País de origen: $pais <br>";
}
?>
