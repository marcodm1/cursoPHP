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
           constantes
        </h1>
    </header>
    <main>
        <div class="ejercicio1">
            <h2>Sintáxis</h2>
            <?php 
                echo "define(NOMBRE, Marco)<br>";
                echo "define(EDAD, 33)<br>";
                define("NOMBRE", "Marco");
                define("EDAD", 33);
                echo "Mi nombre es " . NOMBRE . "<br>";
                echo "Mi edad es " . EDAD . " años";
            ?>
        </div>

        <div class="ejercicio2">
            <h2>integer</h2>
            <?php 
                echo "PHP_OS " . PHP_OS . "<br>";
                echo "PHP_VERSION " . PHP_VERSION . "<br>";
                echo "PHP_EXTENCION_DIR " . PHP_EXTENSION_DIR . "<br>";
                echo "__LINE__ " . __LINE__ . "<br>";
                echo "__FUNCTION__ " . __FUNCTION__ . "<br>";
            ?>
        </div>
    </main>
</body>
</html>