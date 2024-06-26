<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/cantante.css" />
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

  <div class="container-div-grupos">
    <div class="div-grupos">
      <?php foreach ($listadoGrupos as $grupo) {
        if ($grupo->nombre_controlador == "solitario") { ?>
          <h2>En Solitario</h2>
          <div class="element-grupos solitario" onclick="verGrupo('<?php echo $grupo->nombre_controlador; ?>');">
            <div class="img-container">
              <img class="img-grupo" src="../images/grupos/<?php echo $grupo->nombre_controlador; ?>.jpg" />
            </div>
            <div class="div-descripcion">
              <span class="nombre"><?php echo $grupo->nombre_vista; ?></span>
              <p class="descripcion"><?php echo $grupo->descripcion; ?></p>
            </div>
          </div>
        <?php }
      } ?>

      <h2>Grupos Musicales</h2>
      <div class="grupos">
        <?php foreach ($listadoGrupos as $grupo) {
          if ($grupo->nombre_controlador != "solitario") { ?>
            <div class="element-grupos" onclick="verGrupo('<?php echo $grupo->nombre_controlador; ?>');">
              <div class="img-container">
                <img class="img-grupo" src="../images/grupos/<?php echo $grupo->nombre_controlador; ?>.jpg" />
              </div>
              <div class="div-descripcion">
                <span class="nombre"><?php echo $grupo->nombre_vista; ?></span>
                <p class="descripcion"><?php echo $grupo->descripcion; ?></p>
              </div>
            </div>
          <?php }
        } ?>
      </div>

      <script>
        function verGrupo(nombreGrupo) {
          location.href = `../controlador/grupoControlador.php?grupo=${nombreGrupo}`;
        }
      </script>

    </div>
  </div>
</body>

</html>