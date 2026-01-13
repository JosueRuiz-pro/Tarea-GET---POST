<?php
$nombre = $_POST['nombre'] ?? 'No proporcionado';
$correo = $_POST['correo'] ?? 'No proporcionado';
$telefono = $_POST['telefono'] ?? 'No proporcionado';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
</head>

<body>

    <h1>Formulario enviado correctamente</h1>

    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
    <p><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></p>
    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>

    <hr>
    <p>Gracias por contactar a la Institución Educativa Hogwarts.</p>

    <a href="index.php">Volver al inicio</a>

    <footer>
        <p>Institución Educativa Hogwarts &copy; 2026</p>
        <p>Realizado por: Josue Ruiz Arias</p>
    </footer>
</body>


</html>