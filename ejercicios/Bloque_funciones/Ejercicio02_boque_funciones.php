<!-- Ejercicio 2 Bucles funciones por Alejandro Ruiz Polo -->
<!--  Escribe una función que calcule el IMC de una persona dado su peso y altura.
   La función debe devolver el IMC y la categoría correspondiente (bajo peso, peso normal, sobrepeso, obesidad).-->
<!-- Fecha 14/11/2024 -->
 <?php
 
 function calcularIMC($peso, $altura) {
    // Calculamos el IMC
    $imc = $peso / ($altura * $altura);

    // Determinamos la categoría según el valor del IMC
    if ($imc < 18.5) {
        $categoria = "Bajo peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obesidad";
    }

    // Retornamos el IMC y la categoría
    return [
        "imc" => round($imc, 2), // Redondeamos el IMC a dos decimales
        "categoria" => $categoria
    ];
}

// Ejemplo de uso
$peso = 58; // en kg
$altura = 1.70; // en metros

$resultado = calcularIMC($peso, $altura);
echo "IMC: " . $resultado["imc"] . "\n";
echo "Categoría: " . $resultado["categoria"] . "\n";
?>