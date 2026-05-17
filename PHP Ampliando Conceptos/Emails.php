<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
    <?php
    $to = "markutovich@gmail.com";
$subject = "Email de confirmación";
$message= "Hola confirma haciendo click en el siguiente enlace";
$from="administrador@dominio.com";
$headers = "From: $from";

mail($to,$subject, $message, $headers);
echo "Mail enviado";
?>
</body>
</html>