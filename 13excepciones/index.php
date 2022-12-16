<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

function dividir (int $a, int $b = 0) {
    if ($b === 0) {
        throw new Exception("División por 0 controlada");
    }
    return $a / $b;
}

try {
    echo dividir(10, 5);
} catch (Exception $exception) {
    echo $exception->getMessage();
} finally {
    echo "<br />";
    echo "Final";
}

function comprobarCorreoElectronico(string $email) {
    if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El formato del correo electrónico no es correcto");
    }
    return "Correo electrónico correcto!";
}

echo "<br />";
try {
    echo comprobarCorreoElectronico("app@gmail.com");
} catch (Exception $exception) {
    echo $exception->getMessage();
}
