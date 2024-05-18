<?php
require_once "../bd/conn.php";
require_once "../modelo/disco.php";

$im = new Disco();

$menuGrupos = $im->buscarGrupos();
$menuDiscos = $im->buscarDiscos();
?>



<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		:root {
			--color-titulo-menu: #111;
			--color-titulo-menu-hover: #222;
			--color-texto: #eee;
		}

		.container-menu {
			margin: 20px;
			background-color: #111;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.content-menu {
			display: flex;
		}

		.content-menu,
		.content-menu li ul {
			list-style: none;
			padding: 0;
		}


		/* ------------------------- */

		.menu {
			width: max-content;
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
			gap: 20px;
		}

		.menu {
			width: max-content;
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
			gap: 20px;
		}

		.menu>li>a {
			display: block;
			padding: 15px 20px;
			color: var(--color-texto);
			background-color: var(--color-titulo-menu);
			text-decoration: none;
			border-radius: 10px;
			transition: all .3s ease;
		}

		.menu>li>a:hover {
			background-color: var(--color-titulo-menu-hover);
			box-shadow: 0 0 20px 0 #fff7;
		}

		.submenu {
			position: absolute;
			padding: 0;
			display: none;
			list-style: none;
			background-color: rgba(0, 0, 0, 0.5);
			border-radius: 10px;
		}

		.menu li:hover .submenu {
			/* hace que aparezca el submenu */
			margin: 0;
			display: block;
		}

		.submenu li {
			position: relative;
		}

		.submenu li a {
			margin: 0;
			padding: 15px;
			display: block;
			color: var(--color-texto);
			text-decoration: none;
			border-radius: 10px;
		}

		.submenu li a:hover {
			background-color: red;
		}
	</style>
</head>

<body>
	<div class="container-menu">
		<ul class="menu">
			<li><a href="cantanteControlador.php">Home</a></li>
			<li><a href="progresoControlador.php">Progreso</a></li>
			<li>
				<a href="cantanteControlador.php">Grupos</a>
				<ul class="submenu">
					<?php foreach ($menuGrupos as $menuGrupo) { ?>
						<li><a href="grupoControlador.php?grupo=<?php echo $menuGrupo->nombre_controlador; ?>">
								<?php echo $menuGrupo->nombre_vista; ?></a>
						</li>
					<?php } ?>
				</ul>
			</li>
		</ul>
	</div>
</body>

</html>