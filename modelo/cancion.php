<?php 
require_once "disco.php";

class Cancion extends Disco
{
    protected $id_cancion;
    protected $id_disco;
    protected $nombre_vista;
    protected $nombre_controlador;
    protected $duracion;

    public function buscarCancionesPorDisco($search)
    {
        $ic = new Conn();
        $sql = "SELECT * FROM canciones WHERE id_disco = '$search'";
        $consulta = $ic->db->prepare($sql);
        $consulta->execute();
        $numrows = $consulta->rowCount();
        if ($numrows > 0) {
            $objetoConsulta = $consulta->fetchAll((PDO::FETCH_OBJ));
        } else {
            $objetoConsulta = null;
        }
        return $objetoConsulta;
    }
}