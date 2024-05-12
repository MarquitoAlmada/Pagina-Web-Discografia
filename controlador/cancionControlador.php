<?php
require_once "../bd/conn.php";
require_once "../modelo/grupo.php";
require_once "../modelo/disco.php";
require_once "../modelo/cancion.php";

if (!isset($_SESSION)) {
    session_start();
}


class CancionControlador extends Cancion
{

    public function vista($grupo)
    {
        $id_grupo = $this->buscarGrupoPorNombre($grupo);
        $listadoDiscos = $this->buscarDiscosPorGrupo($id_grupo[0]->id_grupo);
        require "../vista/disco.php";
    }
}

$id = new DiscoControlador();
$id->vista($_GET['grupo']);