<?php
require_once "../bd/conn.php";
require_once "../modelo/grupo.php";
require_once "../modelo/disco.php";
require_once "../modelo/cancion.php";

if (!isset($_SESSION)) {
    session_start();
}


class DiscoControlador extends Cancion
{

    public function vista($disco)
    {
        $disco = $this->buscarDiscoPorNombre($disco);
        $listadoDiscos = $this->buscarCancionesPorDisco($disco[0]->id_disco);

        $ig = new Grupo();
        $grupo = $ig->buscarGrupoPorId($disco[0]->id_grupo);
        require "../vista/disco.php";
    }
}

$id = new DiscoControlador();
$id->vista($_GET['disco']);