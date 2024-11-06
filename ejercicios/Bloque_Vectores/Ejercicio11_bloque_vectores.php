<!-- Ejercicio 11 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Ordenar un array asociativo por valor: Crea un array asociativo con 5 nombres de productos y sus precios. Ordena el array por precio en orden ascendente y muestra el array ordenado. -->
<!-- Fecha 06/11/2024 -->
<?php
$productos = array(
    "Patatas" => "150 €",
    "Bicicletas" => 190,
    "Pulsera" => 10,
    "Ordenador" => 200,
    "Volante" => 110
);

// Ordenar el array por valor (precio) en orden ascendente
asort($productos);

// Mostrar el array ordenado
foreach ($productos as $producto => $precio) {
    echo "Producto: $producto, Precio: $precio <br>";
}
?>
