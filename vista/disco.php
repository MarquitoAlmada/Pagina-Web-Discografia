<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/disco.css" />
  <title>Albumes Spinetta</title>
  <style>
    .div-titulo {
      background: linear-gradient(transparent 25%, #111),
        url("../images/grupos/<?php echo $grupo[0]->nombre_controlador ?>.jpg") top / cover fixed transparent;
    }
  </style>
</head>

<body>
  <?php require_once "../menu/menu.php" ?>
  
  <div class="div-titulo">
    <h1>Discografía de Spinetta</h1>
    <span class="frase">"Tengo que aprender a volar entre tanta gente de pie"</span>
    <span>-</span>
    <span>L.A Spinetta</span>
  </div>

  <div class="container-div-discos">
    <div class="div-discos">

      <h2>Discos LA IMAGEN NO SE CENTRA CUANDO ESTA EN VERTICALLLLLL</h2>
      <div class="discos">
        <div class="img-container">
          <img class="img-disco"
            src="../images/discos/<?php echo $grupo[0]->nombre_controlador . "/" . $disco[0]->nombre_controlador ?>.jpg">
        </div>
        <div class="canciones-container">
          <ol class="canciones">
            <?php foreach ($listadoDiscos as $disco) { ?>
              <?php echo "<li>" . $disco->nombre_vista . "</li>";
            } ?>
          </ol>
        </div>
      </div>

    </div>
  </div>
</body>

</html>