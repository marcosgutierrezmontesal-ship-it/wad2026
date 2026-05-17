<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "marcos";
    $_SESSION['edad'] = 20;

    echo " Identificador de la sesión:". session_id();
    echo "<br>";
    echo " Nombre de la sesión:". session_name();
    echo "<br>";
    ?>

</body>
</html>