<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/progreso.css" />
  <title>Albumes Spinetta</title>
</head>

<body>
  <?php require "../menu/menu.php" ?>

  <div class="div-titulo">
    <h1>Discografía de Spinetta</h1>
    <span class="frase">"Tengo que aprender a volar entre tanta gente de pie"</span>
    <span>-</span>
    <span>L.A Spinetta</span>
  </div>

  <div class="container-progreso">
    <div class="content-progreso-total">
      <span class="titulo-progreso">Progreso Total</span>

      <div class="container-div-progreso">
        <span id="porcentaje"><?php echo $progresoTotal ?>%</span>
        <div class="div-progreso" style="width:<?php echo $progresoTotal ?>%;">
          </div>
        </div>
        <span>Te quedan <?php echo $discosFaltantes ?> discos</span>
      </div>
      
      <!-- <div class="content-progreso-grupos">
        <span class="titulo-progreso">Progreso Por Grupos</span>
        <div class="grupos">
          <?php foreach ($listadoGrupos as $grupo) { ?>
            <div class="element-grupos" onclick="verGrupo('<?php echo $grupo->nombre_controlador; ?>');">
              <span class="nombre"><?php echo $grupo->nombre_vista; ?></span>
              <div class="img-container">
                <span class="porcentaje-grupo" id="porcentaje">100%</span>
                <div id="porcentaje-fondo"></div>
                <img class="img-grupo" src="../images/grupos/<?php echo $grupo->nombre_controlador; ?>.jpg" />
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div> -->
    </body>
    
</html>