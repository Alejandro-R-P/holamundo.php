<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);

echo "Bienvenido ". $nombre . " " . $apellido . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";


$nombre_reves = strrev($nombre);
$apellido_reves = strrev($apellido);
echo "Nombre al revés: " . $nombre_reves . "<br>";
echo "Apellido al revés: " . $apellido_reves . "<br>";

$longitud_nombre = strlen($nombre);
$longitud_apellido = strlen($apellido);
$longitud_total = $longitud_nombre + $longitud_apellido;
echo "Letras en el nombre: " . $longitud_nombre . "<br>";
echo "Letras en el apellido: " . $longitud_apellido . "<br>";
echo "Letras totales: " . $longitud_total . "<br>";

$nombre_mayus = strtoupper($nombre);
$apellido_mayus = strtoupper($apellido);
echo "Nombre en mayúsculas: " . $nombre_mayus . "<br>";
echo "Apellido en mayúsculas: " . $apellido_mayus . "<br>";
    
$primer_nombre = $nombre[0];
$ultimo_nombre = $nombre[$longitud_nombre - 1];
$primer_apellido = $apellido[0];
$ultimo_apellido = $apellido[$longitud_apellido - 1];
echo "Primer carácter del nombre: " . $primer_nombre . "<br>";
echo "Último carácter del nombre: " . $ultimo_nombre . "<br>";
echo "Primer carácter del apellido: " . $primer_apellido . "<br>";
echo "Último carácter del apellido: " . $ultimo_apellido . "<br>";

$nombre_modificado = preg_replace('/[aeiouAEIOU]/', 'u', $nombre);
$apellido_modificado = preg_replace('/[aeiouAEIOU]/', 'u', $apellido);
echo "Nombre con vocales cambiadas a 'u': " . $nombre_modificado . "<br>";
echo "Apellido con vocales cambiadas a 'u': " . $apellido_modificado . "<br>";

$suma = $numero1 + $numero2;
$diferencia = $numero1 - $numero2;
$producto = $numero1 * $numero2;

if ($numero2 !=0) {
    $cociente = $numero1 / $numero2;
    echo "Cociente: " . $cociente . "<br>";
} else {
    echo "Cociente: No se puede dividir por 0.<br>";
}
    echo "suma . $suma . <br>";
    echo "diferencia . $diferencia . <br>";
    echo "producto . $producto . <br>";
}
?>