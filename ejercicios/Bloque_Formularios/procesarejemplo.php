<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $opcion = $_POST['opcion'];

    // Validar que todos los campos están llenos
    if (empty($nombre) || empty($email) || empty($comentario) || empty($opcion)) {
        die("Todos los campos son obligatorios.");
    }

    // Validar formato del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El formato del email es inválido.");
    }

    // Si todo está bien, puedes procesar los datos
    echo "Nombre: $nombre<br>";
    echo "Email: $email<br>";
    echo "Comentario: $comentario<br>";
    echo "Opción: $opcion<br>";

    // Aquí puedes guardar los datos en una base de datos o realizar otras acciones


    //Investigar: 
    //empty($variable) devuelve un bool si la variable esta vacía.
    //En qué caso se considera vacia?
    //como funciona die()
    //filter_var() ¿Cómo funciona?
    //expresiones regulares equivalentes... 
    //puedes consultar IA
}
?>