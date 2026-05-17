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

var_dump($_COOKIE);

setcookie("idioma","esp");
if(isset($_COOKIE['idioma']) && $_COOKIE['idioma'] == "esp"){
        echo "Se ha definido una cookie con el idioma en español";
}

setcookie("idioma","",time()-1);
var_dump($_COOKIE);
    ?>

</body>
</html>