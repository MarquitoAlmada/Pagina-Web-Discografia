<?php
require_once "../bd/conn.php";
require_once "../modelo/grupo.php";

if (!isset($_SESSION)) {
    session_start();
}


class CantanteControlador extends Grupo
{

    public function vista()
    {
        $listadoGrupos = $this->buscarGrupos();
        require "../vista/cantante.php";
    }
}

$ic = new CantanteControlador();
$ic->vista();