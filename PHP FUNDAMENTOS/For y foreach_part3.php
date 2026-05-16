<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
//Estructura de control de flujo foreach

$array1 = array(1,2,3,4);
$valores = array("uno" => 1, "dos" => 2, "tres" =>3);

foreach($array1 as $valor){
    echo $valor;
    echo "<br>";
}
foreach( $valores as $k => $v) {
    echo "valores[$k] = > $v";
    echo "<br>";
}
    ?>

</body>
</html>