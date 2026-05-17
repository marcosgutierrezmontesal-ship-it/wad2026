<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    echo getcwd();

    $directorio = scandir(getcwd());
    var_dump($directorio);

    chdir("../");
    echo getcwd();
    ?>

</body>
</html>