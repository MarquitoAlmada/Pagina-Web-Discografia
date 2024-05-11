<?php

class Grupo
{
    protected $id_grupo;
    protected $nombre_vista;
    protected $nombre_controlador;
    protected $descripcion;
    protected $estado;

    public function buscarGrupos()
    {
        $ic = new Conn();
        $sql = "SELECT * FROM grupos";
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

    public function buscarGrupoPorNombre($search)
    {
        $ic = new Conn();
        $sql = "SELECT * FROM grupos WHERE nombre_controlador = '$search'";
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