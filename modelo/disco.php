<?php

class Disco extends Grupo
{
    protected $id_disco;
    protected $id_grupo;
    protected $nombre_vista;
    protected $nombre_controlador;
    protected $duracion;
    protected $año;
    protected $estado;
    
    public function buscarDiscos()
    {
        $ic = new Conn();
        $sql = "SELECT * FROM discos";
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

    public function buscarDiscosPorNombre($search)
    {
        $ic = new Conn();
        $sql = "SELECT * FROM discos WHERE nombre_controlador = '$search'";
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

    public function buscarDiscosPorGrupo($search)
    {
        $ic = new Conn();
        $sql = "SELECT * FROM discos WHERE id_grupo = '$search'";
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