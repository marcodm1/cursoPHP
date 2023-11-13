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
            04-Tipos de datos
        </h1>
    </header>
    <main>
        <?php

            // Funciones
            // $numeroAleatorio = mt_rand(1, 100); // Crea un número aleatorio entre el 1 y el 100
            // echo "gettype($integer) = " . gettype($integer); // te dice el tipo de dato que es

        ?>

        <div class="ejercicio1">
            <h2>integer</h2>
            <?php 
                $integer = 1;
                echo "número integer = " . $integer . "<br>";
                echo "Tengo " . $integer . " sobrino.";
            ?>
        </div>

        <div class="ejercicio2">
            <h2>texto</h2>
            <?php 
                $texto = "texto";
                echo "texto = " . $texto . "<br>";
            ?>
        </div>

        <div class="ejercicio3">
            <h2>float</h2>
            <?php 
                $float = 2.4;
                echo "número float = " . $float ."<br>";
                echo "La vuelta duró " . $float ." segundos. <br>";
            ?>
        </div>

        <div class="ejercicio4">
            <h2>boolean</h2>
            <?php 
                $boolean = true; 
                echo "2 opciones: <br>"; 
            ?> 
            <ol>
                <li>
                    <?php 
                        echo "true = 1"; 
                    ?> 
                </li>
                <li>
                    <?php 
                        echo "false = 0"; 
                    ?> 
                </li>
            </ol>
        </div>

        <div class="ejercicio5">
            <h2>char ó character</h2>
            <?php 
                $char = "a";
                echo "El char es solo una carácter. <br>";
                echo "En este caso = " . $char ."<br>";
            ?>
        </div>

        <div class="ejercicio6">
            <h2>null</h2>
            <?php 
                $nulos = null;
                echo "El null significa que no hay dato o que no existe. <br>";
                echo "Este ejemplo el resultado es = { "  . $nulos . " }"; 
            ?>
        </div>

        <div class="ejercicio7">
            <h2>array</h2>
            <?php 
                $array = [0, "uno", true, 3.2];
                echo "print_r(), es una función que pinta un array de manera sencilla y legible, sin muchos datos.<br>";
                print_r($array); 
                echo "<br><br>";
                echo "var_dump(), es otra función que pinta el array pero con más datos de interés.";
                var_dump($array);
            ?>
        </div>

        <div class="ejercicio8">
            <h2>objeto</h2>
            <?php 
                class Persona {
                    public $nombre;
                    public $edad;
                }
                $persona = new Persona();
                $persona -> nombre = "Marco";
                $persona -> edad = 33;

                // Muestro todas las variables
                echo "Primero creamos el objeto indicando la estructura que va a tener.<br>";
                echo "ejemplo:<br>";
                echo "class Persona {<br>";
                echo "public ". "$" . "nombre;<br>";
                echo "public ". "$" . "edad;<br>";
                echo "}<br>";
                echo "Segundo creamos un objeto.<br>";
                echo "$" . "persona = new Persona();<br>";
                echo "Tercero indicamos los valores del nuevo objeto. <br>";
                echo "$" . "persona -> nombre = Marco;<br>";
                echo "Para mostrar una propiedad nombre de un objeto. <br>echo " . "$" . "persona->nombre.<br>";
                echo "Para mostrar una propiedad edad de un objeto. <br>echo " . "$" . "persona->edad.<br>";        
                echo "En este ejemplo:<br>";
                echo "Mi nombre es " . $persona -> nombre . " y mi edad es " . $persona -> edad;
            ?>
        </div>
    </main>
</body>
</html>