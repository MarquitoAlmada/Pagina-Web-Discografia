<?php
require_once "../bd/conn.php";
require_once "../modelo/progreso.php";

if (!isset($_SESSION)) {
    session_start();
}


class ProgresoControlador extends Progreso
{
    public function vista()
    {
        // ----------- PROGRESO
        $discos = $this->buscarDiscos();
        $discosTotal = count($discos);


        foreach ($discos as $disco) {
            if ($disco->estado != 0) {
                $discosEscuchados++;
            }
        }
        $cancionesEscuchadas = 0;
        $progresoTotal = round(($discosEscuchados / $discosTotal) * 100);
        $discosFaltantes = $discosTotal - $discosEscuchados;

        require "../vista/progreso.php";
    }
}

$ic = new ProgresoControlador();
$ic->vista();