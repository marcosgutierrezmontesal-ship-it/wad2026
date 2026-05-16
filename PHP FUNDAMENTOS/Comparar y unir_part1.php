<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //funciones para comparar arrays

$numeros1 = array(11,22,33);
$numeros2 = array(11,33,55);

$colores1 = array("color1" => "rojo", "color2" => "verde", "color3" => "azul", "color4" => "naranja");
$colores2 = array("color1" => "verde", "color2" => "azul", "color3" => "amarillo");
$diferencias1 = array_diff($numeros1,$numeros2);
$diferencias2 = array_diff($colores1,$colores2);

var_dump($diferencias1);
echo "<br>";
var_dump($diferencias2);
echo "<br>";
    ?>

</body>
</html>