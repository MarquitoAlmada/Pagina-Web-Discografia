<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/grupo.css" />
  <title>Albumes Spinetta</title>
  <style>
    .div-titulo {
      background: linear-gradient(transparent 0%, #111 80%),
        url("../images/fondos/<?php echo $grupo ?>.jpg") top / cover fixed transparent;
    }
  </style>
</head>

<body>
  <div class="div-titulo">
    <h1>Discografía de Spinetta</h1>
    <span class="frase">"Tengo que aprender a volar entre tanta gente de pie"</span>
    <span>-</span>
    <span>L.A Spinetta</span>
  </div>

  <div class="container-div-grupos">
    <div class="div-grupos">
      
    <?php foreach ($listadoDiscos as $disco) {
      echo "$disco->nombre_vista <br>";
    } ?>

    </div>
  </div>
</body>

</html>