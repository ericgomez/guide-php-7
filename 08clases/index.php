<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Usuario {
    /**
     * @var int
     */
    public int $id;

    /**
     * @var array
     */
    public array $usuarios;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->usuarios = ["egomez", "juan", "andrés"];
    }

    public function getNombre():string  {
        return $this->usuarios[$this->id];
    }

    public function recorrerUsuarios():string {
        $resultado = '';
        foreach ($this->usuarios as $usuario) {
            $resultado .= "<br />{$usuario}";
        }
        return $resultado;
    }

    public function encontrarUsuario(int $id = null): string {
        return $this->usuarios[$id ?? $this->id];
    }
}

$usuario = new Usuario(0);
echo $usuario->id;
echo "<br />";
echo "<pre>";
var_dump($usuario->usuarios);
echo "</pre>";
echo "<br />";
echo $usuario->getNombre();
echo "<br />";
echo $usuario->recorrerUsuarios();
echo "<br />";
echo $usuario->encontrarUsuario(1);
