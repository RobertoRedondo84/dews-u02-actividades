<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros - CodeDuck Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
    
    <main>

        <h2>¿Quiénes somos?</h2>

        <p>
            CodeDuck Store es una pequeña tienda especializada en
            productos de informática y tecnología.
        </p>

        <img src="img/nosotros.jpg" alt="Nuestra tienda" width="500">

        <h2>¿Dónde estamos?</h2>

        <p>
            Calle del Código, 25<br>
            12001 Castellón de la Plana
        </p>

        <h2>Contacto</h2>

        <form>

            <p>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre">
            </p>

            <p>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email">
            </p>

            <p>
                <label for="telefono">Teléfono:</label><br>
                <input type="tel" id="telefono" name="telefono">
            </p>

            <p>
                <label for="comentario">Comentario:</label><br>
                <textarea id="comentario" name="comentario"></textarea>
            </p>

            <input type="reset" value="Borrar">
            <input type="submit" value="Enviar">

        </form>

    </main>

    <?php include 'includes/footer.php'; ?>

</body>
</html>