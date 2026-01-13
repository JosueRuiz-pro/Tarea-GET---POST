<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Académico</title>
</head>

<body>

    <h1>Institución Educativa Hogwarts – Portal Académico</h1>
    <p>Seleccione una sección del sitio:</p>


    <a href="navegacion.php?area=Inicio">Inicio</a>
    <a href="navegacion.php?area=Unidades">Unidades</a>
    <a href="navegacion.php?area=Contacto">Contacto</a>


    <hr>

    <h2>Formulario de Contacto</h2>

    <form action="formulario.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="correo">Correo electrónico:</label><br>
        <input type="email" id="correo" name="correo"><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <input type="submit" value="Enviar">
    </form>

    <footer>
        <p>Institución Educativa Hogwarts &copy; 2024</p>
        <p>Realizado por: Josue Ruiz Arias</p>
    </footer>
</body>


</html>