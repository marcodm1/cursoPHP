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
            Operadores
        </h1>
    </header>
    <main>
        <div>
            <h2>Variables</h2>
            <?php 
                $num1 = 55;
                $num2 = 33;
                echo "El primer número es " . $num1 . "<br>";
                echo "El primer número es " . $num2 . "<br>";
                echo "Se recomienda poner los paréntesis en todas las operaciones.<br>";
            ?>
        </div>

        <div>
            <h2>Sumar y restar</h2>
            <?php 
                echo "Sumar: " . "($" . "num1 + " . "$" . "num2);<br>";
                echo "Restar: " . "($" . "num1 - " . "$" . "num2);<br>";
                echo "Suma =  " . ($num1 + $num2) . "<br>";
                echo "Resta = " . ($num1 - $num2) . "<br>";
            ?>
        </div>

        <div>
            <h2>Dividir</h2>
            <?php 
                echo "Dividir: " . "($" . "num1 / " . "$" . "num2);<br>";
                echo "Resta = " . ($num1 / $num2) . "<br>";
            ?>
        </div>

        <div>
            <h2>Multiplicar</h2>
            <?php 
                echo "Dividir: " . "($" . "num1 * " . "$" . "num2);<br>";
                echo "Resta = " . ($num1 * $num2) . "<br>";
            ?>
        </div>

        <div>
            <h2>Resto</h2>
            <?php 
                echo "Dividir: " . "($" . "num1 %" . "$" . "num2);<br>";
                echo "Resta = " . ($num1 % $num2) . "<br>";
            ?>
        </div>

        <div>
            <h2>Incremento</h2>
            <?php 
                echo "Opción 1: " . "$" . "num1++;<br>";
                echo "Opción 2: " . "++$" . "num1;<br>";
                echo "$" . "num1 = " . ++$num1 . "<br>";
            ?>
        </div>

        <div>
            <h2>Decremento</h2>
            <?php 
                echo "Opción 1: " . "$" . "num1--;<br>";
                echo "Opción 2: " . "--$" . "num1;<br>";
                echo "$" . "num1 = " . --$num1 . "<br>";
            ?>
        </div>

        <div>
            <h2>Asignación</h2>
            <?php 
                echo "$" . "num1 += 5;<br>";
                echo "$" . "num1 -= 5;<br>";
                echo "$" . "num1 = " . ($num1 += 5) . "<br>";
                echo "$" . "num1 = " . ($num1 -= 5);
            ?>
        </div>

        <div>
            <h2>Super globales</h2>
            <?php 
                echo $_SERVER['HTTP_USER_AGENT'];
                
            ?>
        </div>

    </main>
</body>
</html>