<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/grupo.css" />
  <title>Albumes Spinetta</title>
  <style>
    .div-titulo {
      background: linear-gradient(transparent 25%, #111),
        url("../images/fondos/<?php echo $grupo ?>.jpg") top / cover fixed transparent;
    }
  </style>
</head>

<body>
  <?php require "../menu/menu.php" ?>
  
  <div class="div-titulo">
    <h1>Discografía de Spinetta</h1>
    <span class="frase">"Tengo que aprender a volar entre tanta gente de pie"</span>
    <span>-</span>
    <span>L.A Spinetta</span>
  </div>

  <div class="container-div-discos">
    <div class="div-discos">

      <h2>Discos</h2>
      <div class="discos">
        <?php foreach ($listadoDiscos as $disco) { ?>
          <div class="element-discos" onclick="verDisco('<?php echo $disco->nombre_controlador; ?>');">
            <div class="img-container">
              <img class="img-disco" src="../images/discos/<?php echo $_GET['grupo'] . "/" . $disco->nombre_controlador; ?>.jpg" />
            </div>
            <div class="div-descripcion">
              <span class="nombre"><?php echo $disco->nombre_vista; ?></span>
              <span class="duracion">Duración: <?php echo $disco->duracion; ?></span>
              <span class="año">Año: <?php echo $disco->año; ?></span>
            </div>
          </div>
        <?php } ?>
      </div>

      <script>
        function verDisco(nombreDisco) {
          location.href = `../controlador/discoControlador.php?disco=${nombreDisco}`;
        }
      </script>

    </div>
  </div>
</body>

</html>