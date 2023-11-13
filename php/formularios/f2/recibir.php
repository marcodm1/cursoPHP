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
        <?php
        // http://localhost/php/formularios/f2/index.php?nombre=Marco&apellido=Dominguez

        // Con el método GET
        if (isset($_GET['nombreGET'])) {
            $nombreGET = $_GET['nombreGET'];
            $apellidoGET = $_GET['apellidoGET'];
            ?>
            <div>
                <?php
                    echo "Nombre: " . $nombreGET . "<br>";
                    echo "Apellido: " . $apellidoGET . "<br>";
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        // Con el método POST

        if (isset($_POST['nombrePOST'])) {
            $nombrePOST = $_POST['nombrePOST'];
            $apellidoPOST = $_POST['apellidoPOST'];
            ?>
            <div>
                <?php
                    echo "Nombre: " . $nombrePOST . "<br>";
                    echo "Apellido: " . $apellidoPOST . "<br>";
                ?>
            </div>
            <?php
        }
        ?>
            <a href="index.php">Volver</a>
    </main>
    <footer>
        <h6>
           Derechos de Marco Domínguez  &copy;
        </h6>
    </footer>
</body>
</html>

