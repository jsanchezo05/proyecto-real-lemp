<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Proyecto Real</title>
</head>
<body>
    <h1>¡Bienvenido a mi proyecto real! (bug arreglado) </h1>
    
    <?php
    // Información del servidor
    echo "<p>PHP versión: " . phpversion() . "</p>";
    
    // Conexión a la base de datos
    $host = getenv('MYSQL_HOST');
    $user = getenv('MYSQL_USER');
    $pass = getenv('MYSQL_PASSWORD');
    $db   = getenv('MYSQL_DATABASE');
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        echo "<p style='color:red'>❌ Base de datos: No conectada</p>";
    } else {
        echo "<p style='color:green'>✅ Base de datos: Conectada correctamente</p>";
    }
    ?>
    <footer>
       <p>© 2026 Mi Empresa - Todos los derechos reservados</p>
    </footer>
</body>
</html>
