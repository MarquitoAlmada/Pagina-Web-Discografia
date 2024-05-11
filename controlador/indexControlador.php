<?php
require_once "../bd/conn.php";
require_once "../modelo/grupo.php";

if (!isset($_SESSION)) {
    session_start();
}


class IndexControlador extends Grupo
{

    public function vista()
    {
        $listadoGrupos = $this->buscarGrupos();
        require "../vista/index.php";
    }
}

$ii = new IndexControlador();
$ii->vista();