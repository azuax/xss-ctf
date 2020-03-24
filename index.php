<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Capture The Flag</title>
    <script src="flag.php"></script>
</head>
<body>
    <h1>XSS Capture The Flag</h1>
    <h2>Instrucciones</h2>
    <p>En los siguientes ejercicios, debes ser capaz de levantar un mensaje de <code>alert</code> con el texto <code>flag</code> utilizando el campo de entrada proporcionado.</p>
    <p>El objetivo es lograr ejecutar código Javascript.</p>
    <p>
        Ejemplo: Si ingresas en el input a continuación
        <code><?php echo htmlentities('<script>alert("flag");</script>'); ?></code>
        te entregará la bandera con el texto que debes ingresar como respuesta a la pregunta</p>
    <p>
        <form action="" method="post">
            <input type="hidden" name="exercise" >
            <input type="text" name="xss" placeholder="Ingresa acá tu código">
            <button type="submit">Probar</button>
        </form>
    </p>
    <p>
        <?php echo isset($_POST['xss']) ? $_POST['xss'] : ''; ?>
    </p>
</body>
</html>