<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
//Arrays asociativos
$navegadores = array("navegador1" => "Chrome", "navegador2" => "Firefox", "navegador3" => "Safari");
$datos = array("nombre" => "marcos", "edad" => 20, "profesor" => true, 3 => 100);
echo "Navegador 3:" . $navegadores["navegador3"];
echo "<br>";

echo "Nombre: " . $datos["nombre"];
echo "<br>";
echo "dato 3: " . $datos[3];
echo "<br>";
var_dump($navegadores);
echo "<br>";
var_dump($datos);
    ?>

</body>
</html>