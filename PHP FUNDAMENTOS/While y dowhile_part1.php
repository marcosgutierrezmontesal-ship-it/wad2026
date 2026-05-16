<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //Esctructura de control de flujo while

$num = 0;
$respuesta = "Oporto";
$intentos = 1;

while($num <=10){
        echo $num;
        echo "<br>";
        $num++;
}

while($respuesta != "Lisboa"){
        echo "Intento " . $intentos;
        if($intentos == 3){
                $respuesta = "Lisboa";
        }
        $intentos++;
}
    ?>

</body>
</html>