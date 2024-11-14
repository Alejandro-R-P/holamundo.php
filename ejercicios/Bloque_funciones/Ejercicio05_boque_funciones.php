<!-- Ejercicio 5 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Escribe una función que genere una contraseña aleatoria. 
    Longitud entre 8 y 12 caracteres, al menos un carácter entre "@#$%&-". -->
<!-- Fecha 14/11/2024 -->
<?php
function generarContrasenaAleatoria() {
    // Definimos los posibles caracteres para la contraseña
    $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeros = '0123456789';
    $caracteresEspeciales = '@#$%&-';

    // Generamos una longitud aleatoria entre 8 y 12
    $longitud = rand(8, 12);

    // Aseguramos que haya al menos un carácter especial
    $contrasena = $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];

    // Rellenamos el resto de la contraseña con caracteres aleatorios
    for ($i = 1; $i < $longitud; $i++) {
        $tipo = rand(1, 3); // 1 = letra, 2 = número, 3 = carácter especial

        if ($tipo === 1) {
            $contrasena .= $letras[rand(0, strlen($letras) - 1)];
        } elseif ($tipo === 2) {
            $contrasena .= $numeros[rand(0, strlen($numeros) - 1)];
        } else {
            $contrasena .= $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];
        }
    }

    // Mezclamos la contraseña para distribuir el carácter especial
    return str_shuffle($contrasena);
}

// Ejemplo de uso
echo generarContrasenaAleatoria();
?>

