<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    //Estructura de control de flujo if

$nota1= 7;
$nota2 = 8;
$nota3 = 5;

if($nota1 >= 5){
    echo "Nota 1 aprobada";
}
echo "<br>";
if($nota2 != 0):
    echo "La nota 2 es distinta de cero";
endif;
echo "<br>";
if($nota3 == 5){
    echo "Dentro del primer if";
    if($nota2 < 9){
        echo "Dentro del segundo if";
    }
}
echo "<br>";
if($nota1 >= 5 and $nota2 >= 5){
    echo "Curso aprobado";
}
    ?>

</body>
</html>