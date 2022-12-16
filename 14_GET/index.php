<?php
$cupon = filter_var($_GET['cupon'], FILTER_SANITIZE_STRING);
if (!$cupon) {
    var_dump("No hay cupón");
}
echo $cupon;

echo "<br />";
$usuario = filter_var($_GET['usuario'], FILTER_SANITIZE_STRING);
if (!$usuario) {
    var_dump("No hay usuario");
}
echo $usuario;
