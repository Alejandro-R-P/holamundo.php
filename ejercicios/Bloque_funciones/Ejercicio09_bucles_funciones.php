<!-- Ejercicio 9 Bucles funciones por Alejandro Ruiz Polo -->
<!-- Realiza una función que reciba como parámetro una contraseña y devuelva un booleano indicando si es valida o no. 
Contraseña válida mas de 8 caracteres y al menos un carácter no numérico y mayúsculas y minúsculas. -->
<!-- Fecha 14/11/2024 -->
<?php
function esContrasenaValida($contrasena) {
    // Verificamos si la longitud es mayor a 8 caracteres
    if (strlen($contrasena) <= 8) {
        return false;
    }

    // Verificamos si la contraseña contiene al menos una letra mayúscula
    if (!preg_match('/[A-Z]/', $contrasena)) {
        return false;
    }

    // Verificamos si la contraseña contiene al menos una letra minúscula
    if (!preg_match('/[a-z]/', $contrasena)) {
        return false;
    }

    // Verificamos si la contraseña contiene al menos un carácter no numérico
    if (!preg_match('/\D/', $contrasena)) { // \D significa cualquier carácter no numérico
        return false;
    }

    // Si pasa todas las comprobaciones, la contraseña es válida
    return true;
}

// Ejemplo de uso
$contrasena = "Abc12345ñ";
if (esContrasenaValida($contrasena)) {
    echo "La contraseña es válida.\n";
} else {
    echo "La contraseña no es válida.\n";
}
?>
