<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo Chino</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .resultado {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .resultado img {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .resultado h3 {
            color: #333;
            text-align: center;
        }

        .resultado p {
            font-size: 1.1em;
            color: #555;
            text-align: center;
        }

        .form-container {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Introduce tu fecha de nacimiento (formato: DD/MM/YYYY)</h2>
        <form action="" method="POST">
            <input type="text" name="fecha_nacimiento" placeholder="DD/MM/YYYY" required>
            <button type="submit">Calcular Horóscopo</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la fecha de nacimiento
        $fecha_nacimiento = $_POST['fecha_nacimiento'];

        // Validar el formato de la fecha (DD/MM/YYYY)
        if (preg_match("/^(\d{2})\/(\d{2})\/(\d{4})$/", $fecha_nacimiento, $coincidencias)) {
            // Extraer día, mes y año
            $dia = $coincidencias[1];
            $mes = $coincidencias[2];
            $año = $coincidencias[3];

            // Verificar si la fecha es válida
            if (checkdate($mes, $dia, $año)) {
                // Determinar el signo del horóscopo chino según el año
                $horoscopo_chino = getHoroscopoChino($año);

                // Mostrar el resultado con la imagen y cualidades
                echo "<div class='resultado'>";
                echo "<h3>Tu horóscopo chino es: $horoscopo_chino[signo]</h3>";
                echo "<img src='imagenes/{$horoscopo_chino['imagen']}' alt='{$horoscopo_chino['signo']}'>";
                echo "<p><strong>Cualidades:</strong> $horoscopo_chino[cualidades]</p>";
                echo "</div>";
            } else {
                echo "<h3>La fecha ingresada no es válida. Por favor, ingresa una fecha correcta.</h3>";
            }
        } else {
            echo "<h3>Por favor, ingresa una fecha válida en el formato DD/MM/YYYY.</h3>";
        }
    }

    // Función para obtener el signo del horóscopo chino basado en el año
    function getHoroscopoChino($año) {
        $signos = [
            0 => ['signo' => 'La Rata', 'imagen' => 'rata.png', 'cualidades' => 'Inteligente, ingeniosa, amable.'],
            1 => ['signo' => 'El Bufalo', 'imagen' => 'bufalo.png', 'cualidades' => 'Trabajador, confiable, honesto.'],
            2 => ['signo' => 'El Tigre', 'imagen' => 'tigre.png', 'cualidades' => 'Valiente, competitivo, confiado.'],
            3 => ['signo' => 'El Conejo', 'imagen' => 'conejo.png', 'cualidades' => 'Gentil, elegante, inteligente.'],
            4 => ['signo' => 'El Dragon', 'imagen' => 'dragon.png', 'cualidades' => 'Fuerte, enérgico, confiado.'],
            5 => ['signo' => 'La Serpiente', 'imagen' => 'serpiente.png', 'cualidades' => 'Sabia, astuta, sofisticada.'],
            6 => ['signo' => 'El Caballo', 'imagen' => 'caballo.png', 'cualidades' => 'Energético, independiente, audaz.'],
            7 => ['signo' => 'La Cabra', 'imagen' => 'cabra.png', 'cualidades' => 'Creativa, tranquila, bondadosa.'],
            8 => ['signo' => 'El Mono', 'imagen' => 'mono.png', 'cualidades' => 'Divertido, adaptable, curioso.'],
            9 => ['signo' => 'El Gallo', 'imagen' => 'gallo.png', 'cualidades' => 'Valiente, honesto, puntual.'],
            10 => ['signo' => 'El Perro', 'imagen' => 'perro.png', 'cualidades' => 'Leal, fiel, responsable.'],
            11 => ['signo' => 'El Cerdo', 'imagen' => 'cerdo.png', 'cualidades' => 'Generoso, amable, honesto.']
        ];

        // El ciclo de 12 años del horóscopo chino
        $indice = ($año - 1900) % 12;

        return $signos[$indice];
    }
    ?>
</body>
</html>
