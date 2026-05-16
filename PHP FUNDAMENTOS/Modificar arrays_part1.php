<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //Funciones para modificar arrays

$frutas = array("naranja","plátano","manzana","frambuesa");

var_dump($frutas);
echo "<br>";

$eliminado = array_shift($frutas);
var_dump($eliminado);
echo "<br>";
var_dump($frutas);
    ?>

</body>
</html>