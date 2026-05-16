<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //Funciones variadas de arrays

$frutas = array("naranja","plátano","manzana","frambuesa");

$elementos = count($frutas);
echo $elementos;
echo "<br>";

$actual = current($frutas);
echo $actual;
echo "<br>";

end($frutas);

$actual = current($frutas);
echo $actual;
echo "<br>";

reset($frutas);

$meses=array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril");
$clave = array_search("Febrero", $meses);
if($clave){
    echo $clave . " " . $meses[$clave];
}else{
    echo "No se ha encontrado el elemento";
}
    ?>

</body>
</html>