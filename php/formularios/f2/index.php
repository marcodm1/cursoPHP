<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Formulario en php
        </h1>
    </header>
    <main>
        <h2>Usando el método GET</h2>
        <div>
            <form action="recibir.php" method="GET">
                <p>
                    <label for="nombreGET">Nombre</label>
                    <input type="text" name="nombreGET">
                </p>
                <p>
                    <label for="apellidoGEY">Apellido</label>
                    <input type="text" name="apellidoGET">
                </p>
                <input type="submit" value="Enviar">
            </form>
        </div>

        <h2>Usando el método POST</h2>
        <div>
            <form action="recibir.php" method="post">
                <p>
                    <label for="nombrePOST">Nombre</label>
                    <input type="text" name="nombrePOST">
                </p>
                <p>
                    <label for="apellidoPOST">Apellido</label>
                    <input type="text" name="apellidoPOST">
                </p>
                <input type="submit" value="Enviar">
            </form>
        </div>

    </main>
    <footer>
        <h6>
           Derechos de Marco Domínguez  &copy;
        </h6>
    </footer>
</body>
</html>