<?php
function holaMundo(): string {
    return "Hola Mundo con EricGomez";
}
echo holaMundo();

echo "<br />";

$holaMundo = function (): string {
    return "Hola Mundo con EricGomez";
};
echo $holaMundo();

echo "<br />";
function saluda(string $nombre = "EricGomez"): string {
    return sprintf('Hola %s', $nombre);
}
echo saluda();

echo "<br />";
function integer_division(...$ints): int {
    return intdiv($ints[0], $ints[1]);
}
echo integer_division(10, 4);

echo "<br />";
function recorrer_usuarios(...$usuarios): string {
    $resultado = '';
    foreach ($usuarios as $usuario) {
        $resultado .= "<br />{$usuario}";
    }
    return $resultado;
}
echo recorrer_usuarios("usuario1", "usuario2", "usuario3");

echo "<br />";
function recorrer_usuarios_list($usuarios = []): string {
    $resultado = '';
    foreach ($usuarios as $usuario) {
        list($id, $nombre, $apellido) = $usuario;
        $resultado .= "<br />{$id}, {$nombre}, {$apellido}";
    }
    return $resultado;
}

$usuariosComplejo = [
    [1, "eric", "gomez"],
    [2, "juan", "lópez"],
    [3, "sofia", "garcía"],
    [4, "daniel", "jimenez"]
];
echo recorrer_usuarios_list($usuariosComplejo);
