<?php
$area = $_GET['area'] ?? 'No se ha seleccionado ninguna sección';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección seleccionada</title>
</head>

<body>

    <h1>Sección del Portal</h1>

    <p>Usted ha seleccionado la sección:</p>
    <strong><?php echo htmlspecialchars($area); ?></strong>

    <hr>

    <?php
if ($area == "Inicio") {
    echo "<p>Bienvenido al Portal Académico de la Institución Educativa.</p>";
} elseif ($area == "Unidades") {
    echo "<p>Aquí se muestran las unidades académicas disponibles.</p>";
} elseif ($area == "Contacto") {
    echo "<p>Puede comunicarse con nosotros mediante el formulario.</p>";
}
?>

    <br><br>
    <a href="index.php">Volver al menú</a>

    <footer>
        <p>Institución Educativa Hogwarts &copy; 2026</p>
        <p>Realizado por: Josue Ruiz Arias</p>
    </footer>
</body>


</html>