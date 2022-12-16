<?php
$a = 2;
$b = 2;
if($a > $b) {
    echo "A es Mayor que B";
} elseif ($a === $b) {
    echo "A es Igual que B";
} else {
    echo "A no es Mayor que B";
}

echo "<br />";
$nombre = null;
echo $nombre ? $nombre : "Cursos";

echo "<br />";
$nombre = "EricGomez";
echo $nombre ?? "Cursos";

echo "<br />";
$mes = 3;
switch ($mes) {
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    case 3:
        echo "Marzo";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Mayo";
        break;
    case 6:
        echo "Junio";
        break;
    case 7:
        echo "Julio";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Septiembre";
        break;
    case 10:
        echo "Octubre";
        break;
    case 11:
        echo "Noviembre";
        break;
    case 12:
        echo "Diciembre";
        break;
    default:
        echo "Error";
        break;
}
