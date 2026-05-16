<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
$valor1 = 2;
$valor2 = 6;
$dia = 4;

//Estructura de control de flujo elif

if($valor1 > $valor2){
    echo "valor1 es mayor que valor2";
    echo "<br>";
}
elseif ($valor1 == $valor2){
    echo "Valor 1 es igual al valor2";
    echo "<br>";
}
else{
    echo "valor 1 es menor que valor2";
}
if($dia == 1){
    echo "Lunes";
}
elseif($dia == 2){
    echo "Martes";
}
elseif($dia == 3){
    echo "Miércoles";
}
    ?>

</body>
</html>