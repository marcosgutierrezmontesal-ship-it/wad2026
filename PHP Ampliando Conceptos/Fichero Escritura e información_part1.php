<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    $miarchivo = fopen("archivo2.txt","a+");

fwrite($miarchivo, "Escribiendo dentro del fichero archivo2.txt");
fflush($miarchivo);
    ?>

</body>
</html>