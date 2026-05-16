<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
//break

for ($i=1;$i<=10;$i++){
        echo "valor de i:" . $i;
        echo "<br>";
        if($i == 3){
                break;
        }
}

for($j=1; $j<=10;$j++){
        echo "valor de j:" . $j;
        echo "<br>";
        for($k=1;$k<=10;$k++){
                echo "valor de k:" . $k;
                echo "<br>";
        }
}
    ?>

</body>
</html>