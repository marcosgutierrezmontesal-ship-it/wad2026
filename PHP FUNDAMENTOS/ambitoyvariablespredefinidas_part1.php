<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php 
    // Variables predefinidas
    $valor1 = 10;
    $valor2 = 5;

function prueba(){
    global $valor1, $valor2;
    $valor3 = $valor1 + $valor2;
    echo $valor3;
}
prueba();
    ?>

</body>
</html>