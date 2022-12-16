<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Usuario {
    protected $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function select(): string {
        return $this->database->select();
    }
}

$usuario = new Usuario(
    new class {
        public function select(): string {
            return "CONSULTA SELECT DE USUARIOS";
        }
    }
);
echo $usuario->select();
