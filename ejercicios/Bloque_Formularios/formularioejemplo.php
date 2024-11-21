<link rel="stylesheet" href="estilos4.css"> <!-- Opcional: enlace a un archivo CSS -->
</head>
<body>
    <form action="Ejercicio02_bloque_formularios.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>
        
        <label for="opcion">Selecciona una opción:</label>
        <select id="opcion" name="opcion" required>
            <option value="">Selecciona una opción</option>
            <option value="opcion1">Masculino</option>
            <option value="opcion2">Femenino</option>
        </select>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>