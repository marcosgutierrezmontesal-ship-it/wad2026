<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
        //Arrays y ordenación
    $dias=array("lunes","martes","miercoles","jueves","viernes","Sabado","Domingo");

    $numeros = array(10,11,8,103,99,54);

    $arraynombres = array("Marcos" => "20", "Manolo" => "19", "emilio" => "29");
    var_dump($arraynombres);
    echo "<br>";

    ksort($arraynombres);
    var_dump($arraynombres);
    echo "<br>";

    
    ?>

</body>
</html>