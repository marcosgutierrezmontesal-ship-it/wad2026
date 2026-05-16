<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //Estructura de control de flujo switch

$dia = 3;
switch($dia){
        case 1:
        echo "Lunes";
        break;
          case 2:
        echo "Martes";
        break;
          case 3:
        echo "Miércoles";
        break;
          case 4:
        echo "Jueves";
        break;
          case 5:
        echo "Viernes";
        break;
          case 6:
        echo "Sábado";
        break;
          case 7:
        echo "Domingo";
        break;
        default:
        echo "dia no válido";
}
$diasemana = "Martes";
switch($diasemana){
    case "Lunes":
    echo 1;
    break;
    case "Martes":
    echo 2;
    break;
    case "Miércoles":
    echo 3;
    break;
    case "Jueves":
    echo 4;
    break;
    case "Viernes":
    echo 5;
    break;
    case "Sábado":
    echo 6;
    break;
    case "Domingo":
    echo 7;
    break;
    default:
    echo "día no válido";
}
?>

</body>
</html>