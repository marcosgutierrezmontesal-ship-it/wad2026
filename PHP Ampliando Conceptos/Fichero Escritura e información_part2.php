<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    $miarchivo = fopen("archivo2.txt","a+");

    $arrayinfo = stat("archivo2.txt");
    var_dump($arrayinfo);

    echo filesize("archivo2.txt");
    ?>

</body>
</html>