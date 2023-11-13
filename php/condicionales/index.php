<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Condicionales básicos
        </h1>
    </header>
    <main>
        <p>
            Cuando las condiciones se cumplen, siempre responden primero cuando se cumplen y despues del else cuando no se cumplen.
        </p>
        <?php
            $nombre = "Marco";
            $edad = 33;
            $num1 = 1;
            $num2 = 2;
        ?>

        <div class="estructura">
            <h2>
                Condicional básico ( == )
            </h2>
            <?php 
                echo "if (1 == 1) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional básico ( > )
            </h2>
            <?php 
                echo "if (2 > 1) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional básico ( >= )
            </h2>
            <?php 
                echo "if (1 >= 1) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional básico ( != )
            </h2>
            <?php 
                echo "if (1 != 1) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional básico estricta ( === ). Compara valores y tipos.
            </h2>
            <?php 
                echo "if (1 != 1) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <h1>
            Condicionales medios
        </h1>

        <div class="estructura">
            <h2>
                Condicional con &&
            </h2>
            <?php 
                echo "if (2 >= 1 && 2 >= 2) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional con ||
            </h2>
            <?php 
                echo "if (2 >= 1 || 1 >= 2) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional anidado opción 1
            </h2>
            <?php 
                echo "if (3 == 1) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}elseif (3 == 2) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}elseif (3 == 3) {<br>";
                    echo "echo Se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional anidado opción 2
            </h2>
            <?php 
                echo "if (3 == 1) {<br>";
                    echo "if (1 == 1) {<br>";
                        echo "echo Se cumple la condición.<br>";
                    echo "}else";
                    echo "echo No se cumple la condición.<br>";
                echo "}else {<br>";
                    echo "echo No se cumple la condición.<br>";
                echo "}<br>";
                
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional switch
            </h2>
            <?php 
                echo "$" . "opcion = 1; <br>"; 
                echo "switch ($" . "opcion) {<br>";
                echo "case 1:<br>";
                echo "echo Opción 1.<br>";
                echo "break;<br>";
                echo "case 2:<br>";
                echo "echo Opción 2.<br>";
                echo "break;<br>";
                echo "case 3:<br>";
                echo "echo Opción 3.<br>";
                echo "break;<br>"; 
                echo "default:<br>";
                echo "echo No corresponde ninguna de las opciones.<br>";  
                echo "}<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional ternario opcion 1
            </h2>
            <?php 
                echo "$" . "admin = true;<br>";
                echo "echo Hola (" . "$" . "admin ? 'Es administrador' : 'No es administrador';<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional ternario opcion 2
            </h2>
            <?php 
                echo "$" . "edad = 33; <br>";
                echo "$" . "mensaje = (" . "$" . "edad >= 18) ? 'mayor' : 'menor';<br>";
            ?>
        </div>

        <div class="estructura">
            <h2>
                Condicional ternario opcion 3
            </h2>
            <?php 
                echo "$" . "edad = 33; <br>";
                echo "$" . "mensaje = (" . "$" . "edad >= 18) ? 'mayor' : 'menor';<br>";
            ?>
        </div>

    </main>
    <footer>
        <h6>
           Derechos de Marco Domínguez  &copy;
        </h6>
    </footer>
</body>
</html>