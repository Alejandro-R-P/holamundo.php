<!-- Ejercicio 4 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Borrar un elemento específico de un array numérico: Crea un array con los nombres de 5 colores. Borra el segundo color del array y muestra el array actualizado -->
<!-- Fecha 31/10/2024 -->
<?php
$colores = array("Blanco", "Negro", "Azul", "Naranja", "Rojo");
array_splice($colores, 1, 1);
foreach ($colores as $x) {
    echo "$x <br>";
}
?>