<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //Función getdate

$hoy = getdate();
var_dump($hoy);

if($hoy["month"] == "May"){
        echo "Mayo";
}
    ?>

</body>
</html>