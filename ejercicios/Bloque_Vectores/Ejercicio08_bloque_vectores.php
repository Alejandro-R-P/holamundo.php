<!-- Ejercicio 8 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Modificar un elemento específico de un array asociativo: Crea un array asociativo con los nombres de 4 países y sus capitales. Modifica la capital de uno de los países y muestra el array actualizado. -->
<!-- Fecha 06/11/2024 -->

 <?php

$paises = array(
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Roma",
    "Alemania" => "Berlín"
);

// Modificar la capital de uno de los países (por ejemplo, Italia)
$paises["Italia"] = "Milán";

// Mostrar el array actualizado
foreach ($paises as $pais => $capital) {
    echo "País: $pais, Capital: $capital <br>";
}
?>
