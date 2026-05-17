<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
<?php

if(isset($_POST['usuario'])){
        if(!empty($_POST['usuario'])){
                $usuario = $_POST['usuario'];
                echo "Nombre del usuario" . $usuario;
        }
}
if(isset($_POST['password'])){
        if(!empty($_POST['password'])){
                $password = $_POST['password'];
                echo "password del usuario" . $password;
        }
}
?>
</form>
</body>
</html>