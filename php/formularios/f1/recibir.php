<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre     = isset($_POST['nombre'])   ? htmlspecialchars($_POST['nombre'])    : '';
        $apellido   = isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido'])  : '';
        $edad       = isset($_POST['edad'])     ? max(0, (int)$_POST['edad'])           : 0;
        $email      = isset($_POST['email'])    ? htmlspecialchars($_POST['email'])     : '';
        $pais       = isset($_POST['pais'])     ? htmlspecialchars($_POST['pais'][0])   : '';
        $pass       = isset($_POST['pass'])     ? htmlspecialchars($_POST['pass'])      : '';
        $comments   = isset($_POST['comments']) ? htmlspecialchars($_POST['comments'])  : '';
        $sub        = isset($_POST['sub'])      ? 'Si'                                  : 'No';
        $mayor      = isset($_POST['mayor'])    ? 'Si'                                  : 'No';

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellido:</strong> $apellido</p>";
        echo "<p><strong>Edad:</strong> $edad</p>";
        echo "<p><strong>Email Electrónico:</strong> $email</p>";
        echo "<p><strong>País:</strong> $pais</p>";
        echo "<p><strong>Contraseña:</strong> $pass</p>";
        echo "<p><strong>Comentarios:</strong> $comments</p>";
        echo "<p><strong>Suscripción al boletín:</strong> $sub</p>";
        echo "<p><strong>Mayor de edad:</strong> $mayor</p>";

    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }

    if ($pais == "España") {
        echo "<p><strong>Habla español:</strong> Si</p>";
    }else {
        echo "<p><strong>NO habla español:</strong> No</p>";
    }
    ?>    
</body>
</html>
