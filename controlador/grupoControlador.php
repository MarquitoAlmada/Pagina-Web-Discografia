<?php
require_once "../bd/conn.php";
require_once "../modelo/grupo.php";
require_once "../modelo/disco.php";

if (!isset($_SESSION)) {
    session_start();
}


class GrupoControlador extends Disco
{

    public function vista($grupo)
    {
        $id_grupo = $this->buscarGrupoPorNombre($grupo);
        $listadoDiscos = $this->buscarDiscosPorGrupo($id_grupo[0]->id_grupo);
        require "../vista/grupo.php";
    }
}

$ig = new GrupoControlador();
$ig->vista($_GET['grupo']);