<!-- Ejercicio 3 Bloque Vectores por Alejandro Ruiz Polo -->
<!-- Modificar un elemento específico de un array numérico: Crea un array con los nombres de 5 animales. Modifica el tercer elemento del array para que sea otro animal diferente y muestra el array actualizado. -->
<!-- Fecha 31/10/2024 -->
<?php
$animales = array("Perro", "Gato", "Leon", "Loro", "Tigre");
$animales[2] = "Jaguar";
foreach ($animales as $x) {
    echo "$x <br>";
}
?>