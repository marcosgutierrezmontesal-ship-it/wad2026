<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php 
    $miarchivo = fopen("archivo1.txt","r+");
if($miarchivo == false){
        echo "error al abrir el archivo1.txt";
}

$arrayarchivo = file("archivo1.txt");
var_dump($arrayarchivo);
    ?>

</body>
</html>