<link rel="stylesheet" href="estilos3.css"> <!-- Opcional: enlace a un archivo CSS -->
</head>
<body>
    <form action="procesar1.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario"></textarea>
        
        <label>Selecciona una opción:</label><br>
        <input type="radio" id="opcion1" name="opcion" value="opcion1">
        <label for="opcion1">Hombre</label><br>
        <input type="radio" id="opcion2" name="opcion" value="opcion2">
        <label for="opcion2">Mujer</label><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>