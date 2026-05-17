<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
    <?php

//var_dump($_FILES);

$directorio = ini_get("upload_tmp_dir");
echo $directorio;

$directorioTemp = $_FILES['imagen']['tmp_name'];
move_uploaded_file($directorioTemp,$_FILES['imagen']['name']);

?>
</body>
</html>