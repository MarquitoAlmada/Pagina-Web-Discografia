<?php
require_once "../bd/conn.php";
require_once "../modelo/disco.php";

$im = new Disco();

$grupos = $im->buscarGrupos();
$discos = $im->buscarDiscos();
?>



<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		:root {
			--color-titulo-menu: #111;
			--color-titulo-menu-hover: #2a2a2a;
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
		}

		.menu>li:hover {
			filter: brightness(80%);
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
			margin: 0;
			display: block;
		}

		.submenu li:hover {
			filter: brightness(80%);
			border-radius: 10px;
		}

		.submenu li a {
			display: block;
			color: var(--color-texto);
			margin: 0;
			padding: 15px;
			text-decoration: none;
		}


		.content-menu li ul {
			display: none;
		}
	</style>
</head>

<body>
	<div class="container-menu">
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">En Solitario</a></li>
			<li>
				<a href="#">Grupos</a>
				<ul class="submenu">
					<?php foreach ($grupos as $grupo) {
						if ($grupo->nombre_controlador != "solitario") { ?>
							<li><a href="#">
									<?php echo $grupo->nombre_vista; ?></a>
								<ul class="sub-submenu">
									<?php foreach ($discos as $disco) {
										if ($grupo->id_grupo == $disco->id_grupo) { ?>
											<li><a href="#">
													<?php echo $disco->nombre_vista; ?></a></li>
										<?php }
									} ?>
								</ul>
							</li>
						<?php }
					} ?>
				</ul>
			</li>
		</ul>
	</div>
</body>

</html>