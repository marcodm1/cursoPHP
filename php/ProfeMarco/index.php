<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleM.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>
            Primeros ejercicios de nivel 1 para practicar y aprender los tipos de datos más usados.
        </h1>
        <p>
            TODOS los ejercicios se realizarán dentro de las etiquetas < ?php     ? > que hay en cada < div > indicados con un ( // aquí ).
        </p>

        <div>
            <h2>echo</h2>
            <p><span>Descripción:</span> El ( echo ) no es un tipo de dato pero lo vamos a usar para imprimir o mostrar los resultados de los ejercicios siguientes</p>
            <p><span>Ejercicio 1: </span>Crea un echo con un texto de 2 palabras cualesquiera.</p>
            <?php 
                // aquí
            ?>
        </div>
        
        <div>
            <h2>integer ó int</h2>
            <p><span>Descripción:</span> Es el tipo de dato numérico (matemáticamente hablando), son números que vamos a sumar, restar etc...</p>
            <p><span>Ejercicio 2: </span>Crea una variable con el nombre que desees y que tenga un valor numérico entero (int) e imprimelo por pantalla.</p>

            <?php 
                // aquí
            ?>
        </div>

        <div>
            <h2>float</h2>
            <p><span>Descripción:</span> Es como el int pero con decimales, (2.3  13.45 etc..).</p>
            <p><span>Ejercicio 3: </span>Crea una variable con el nombre que desees y que tenga un valor numérico float  e imprimelo por pantalla.</p>
            <?php 
                // aquí
            ?>
        </div>

        <div>
            <h2>boolean</h2>
            <p><span>Descripción:</span> Es un tipo de dato que solo acepta (true ó false) que significan verdadero o falso y siempre se escribe sin comillas.</p>
            <p><span>Ejercicio 4: </span>Crea una variable con el nombre que desees y que tenga un valor boolean  e imprimelo por pantalla.</p>
            <?php 
                // aquí
            ?> 
        </div>

        <div>
            <h2>texto</h2>
                <p><span>Descripción:</span> Es un tipo de dato que  siempre va entre comillas dobles o simples, es lo mismo.</p>
                <p><span>Ejercicio 5: </span>Crea una variable con el nombre que desees y que tenga un valor de tipo texto  e imprimelo por pantalla.</p>
                <?php 
                    // aquí
                ?> 
        </div>

        <div>
            <h2>character ó char</h2>
                <p><span>Descripción:</span> Es un tipo de dato que solo acepta (true ó false) que significan verdadero o falso y siempre se escribe sin comillas.</p>
                <p><span>Ejercicio 6: </span>Crea una variable con el nombre que desees y que tenga un valor boolean  e imprimelo por pantalla.</p>
                <?php 
                    // aquí
                ?> 
        </div>

        <h1>
            Segundos ejercicios de nivel 2 para seguir practicando los distintos tidpos de datos.
        </h1>

        <div>
            <h2>echo</h2>
            <p><span>Descripción:</span> El ( echo ) tambien puede concatenar cadenas de texto "" con variables $ con un . entre medias. ejemplo ( echo "hola" . $variable )</p>
            <p><span>Ejercicio 7: </span>Crea un echo con un texto de 1 palabra y concatenala con otro texto de otra palabra.</p>
            <?php 
                // aquí
            ?>
        </div>

        <div>
            <h2>integer ó int</h2>
            <p><span>Ejercicio 8: </span>Crea una variable con el nombre que desees y que tenga un valor numérico entero (int), después crea una segunda variable con otro nombre que desees y que tenga un valor numérico entero (int) e imprimelo por pantalla concatenado.</p>
            <p><span>Ejercicio 9: </span>imprime por pantalla el resultado de la <span>suma</span> concatenando texto antes de la operación.</p>
            <p><span>Ejercicio 10: </span>imprime por pantalla el resultado de la <span>resta</span> concatenando texto antes de la operación.</p>
            <p><span>Ejercicio 11: </span>imprime por pantalla el resultado de la <span>multiplicación</span> concatenando texto antes de la operación.</p>
            <p><span>Ejercicio 12: </span>imprime por pantalla el resultado de la <span>división</span> concatenando texto antes de la operación.</p>
            <?php 
                // aquí
            ?>
        </div>

        <h1>
            Ejercicios de nivel 1 para aprender el condicional ( if ).
        </h1>

        <div>
            <h2>if</h2>
            <p><span>Descripción:</span> if es un condicional, significa que si se cumple una condición haremos una cosa, se escribe siempre con == si queremos comparar.</p>
                <p>if (condicion) {</p>
                    <p>// se cumple</p>
                    <p>}</p>
                    <p>fuera del if lo que no se cumple</p>
                    <p><span>Ejercicio 13: </span>Crea una variable numérica (int), crea un condicional if que compruebe si el número que has introducido en la variable es igual a 10 e imprime por pantalla concatenado "numero correcto" y la variable.</p>
            <?php 
                // aquí
            ?>
        </div>

        <div>
            <h2>if else</h2>
            <p><span>Descripción:</span> if else un condicional igual que el if, pero para cuando la condición no se cumple poder hacer algo.</p>
            <p>if (condicion) {</p>
                <p>se cumple</p>
                <p>} else {</p>
                <p>no se cumple</p>
                <p>}</p>
            <p><span>Ejercicio 14: </span>Crea una variable numérica (int), crea un condicional if else que compruebe si el número que has introducido en la variable es igual a 13 e imprime por pantalla concatenado "numero correcto" y la variable. En el caso de que no se cumpla la condición, imprime "numero NO correcto" concatenandolo con la variable.</p>
            <?php 
                // aquí
            ?>
        </div>

        <div>
            <h2>if else</h2>
            <p><span>Ejercicio 15: </span>Crea una variable numérica (int), crea otra variable numérica (int), crea un condicional if else que compruebe si el número primero que has introducido en la variable es mayor que el segundo. Si lo es, imprime "El primer número es mayor que " concatenando con el numero menor, y si no, "El primer número es menor que " concatenando con el segundo </p>
            <?php 
                // aquí
            ?>
        </div>

        <div>
            <h2>if else</h2>
            <p><span>Ejercicio 16: </span>Crea una variable numérica (int), crea otra variable numérica (int), crea un condicional if else que compruebe si la  suma de los 2 números es 10, si lo es, imprime por pantalla un mensaje concatenandolo con la suma, y si no, imprime otro mensaje concatenando con la suma de las 2 variables. </p>
            <?php 
                // aquí
            ?>
        </div>


    </main>
</body>
</html>