<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
//continue

for ($i=1; $i<=10; $i++){
        if($i == 3){
                continue;
        }

        echo "Valor de i: " . $i;
        echo "<br>";
}
    ?>

</body>
</html>