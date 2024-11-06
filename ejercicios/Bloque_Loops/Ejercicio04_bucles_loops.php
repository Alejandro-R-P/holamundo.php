<!-- Ejercicio 3 Bucles Loops por Alejandro Ruiz Polo -->
<!-- Crea un programa con una variable aleatoria entre  1 y 50 y escriba la tabla de multiplicar de dicho número. -->
<!-- Fecha 30/10/2024 -->
 <?php
// Genera un número aleatorio entre 1 y 50
$numero = rand(1, 50);

// Muestra el número aleatorio seleccionado
echo "Tabla de multiplicar del número: $numero<br>";
echo "<br>";
// Bucle para generar la tabla de multiplicar del número aleatorio
for ($i = 1; $i <= 10; $i++) {
    // Calcula el resultado de la multiplicación
    $resultado = $numero * $i;
    
    // Muestra el resultado de la multiplicación
    echo "$numero x $i = $resultado<br>";
}
?>