<?php
/*
   Ordenar un array asociativo por valor:
   Crea un array asociativo con 5 nombres de productos y sus precios.
   Ordena el array por precio en orden ascendente y muestra el array ordenado en una tabla HTML con cabeceras "Producto" y "Precio".
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Precios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .titulo {
            text-align: center;
            font-weight: bold;
            margin: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Crear un array asociativo con los nombres de 5 productos y sus precios
    $productos = [
        "Manzana" => 1.20,
        "Banana" => 0.80,
        "Cereza" => 2.50,
        "Durazno" => 1.50,
        "Fresa" => 3.00
    ];

    // Mostrar la tabla original
    echo "<div class='titulo'>Tabla Original</div>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th></tr>"; // Cabeceras de la tabla
    foreach ($productos as $producto => $precio) {
        echo "<tr><td>$producto</td><td>€" . number_format($precio, 2) . "</td></tr>";
    }
    echo "</table>";

    // Ordenar el array por precio en orden ascendente
    asort($productos);

    // Mostrar la tabla ordenada
    echo "<div class='titulo'>Tabla Ordenada por Precio</div>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th></tr>"; // Cabeceras de la tabla
    foreach ($productos as $producto => $precio) {
        echo "<tr><td>$producto</td><td>€" . number_format($precio, 2) . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>