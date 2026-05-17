<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    //Definir cookies propias

setcookie("noexpira",1);

setcookie("micookie",2,time() + 10);
    ?>

</body>
</html>