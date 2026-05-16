<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
//recursividad

function factorial($n) {
    if($n==1) {
        return 1;
    }
    else {
        echo $n . " x ";
        return $n * factorial($n-1);
    }
}

$resultado = factorial(5);
echo $resultado;
    ?>

</body>
</html>