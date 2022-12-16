<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

abstract class UsuarioAbstracto {

    abstract public function edad(int $edad): int;

    public function nombre(string $nombre): string {
        return $nombre;
    }

    public function apellido(string $apellido): string {
        return $apellido;
    }
}

class Usuario extends UsuarioAbstracto {
    public function edad(int $edad): int {
        return $edad;
    }
}

$usuario = new Usuario;
echo sprintf(
    '%s %s %d',
    $usuario->nombre('Eric'),
    $usuario->apellido('Gomez'),
    $usuario->edad(29)
);

