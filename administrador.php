<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Planet</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=1.0.1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="access/Css/style-administrador.css">
</head>
<body>
	
	<!-- Menu de la pagina -->
	<header>
		<div class="navigation">
			<ul>
				<!-- Logo en el menu -->
				<li class="logo-bar">
					<a href="#">
						<span class="icon">
							<img src="access/Img/logo.png">
						</span>
						<span class="title">Movies Planet</span>
					</a>
				</li>
				<!-- Opciones del menu -->
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						<span class="title">Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
						</span>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-film" aria-hidden="true"></i>
						</span>
						<span class="title">Movies</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-users" aria-hidden="true"></i>
						</span>
						<span class="title">Clients</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-clone" aria-hidden="true"></i>
						</span>
						<span class="title">Loans</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
						<span class="title">Setting</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
						</span>
						<span class="title">Sing Out</span>
					</a>
				</li>
			</ul>
		</div>

		<!-- Boton para abrir o cerrar el menu -->
		<div class="toggle" onclick="toggleMenu()"></div>
	</header>

	<!-- Contenido de la pagina -->
	<div class="contenido">
		<!-- Titulo del contenido de la pagina -->
		<h1>
			Dashboard
		</h1>

		<div class="contenido-dashboard">
			<!-- Primer bloque del contenido de la pagina -->
			<div class="usuarios">
				<h2>
					Users
				</h2>

				<!-- Usuarios que usan la pagina web -->
				<div class="usuarios-contenido">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h3>
						Website users
					</h3>
					<h3 class="comodin">
						312 users
					</h3>
				</div>
			</div>

			<!-- Segundo bloque del contenido de la pagina -->
			<div class="peliculas-contenido">
				<h2>
					Movies
				</h2>

				<!-- Peliculas separadas por categoria de la pagina web -->
				<div class="categotias-contenido">
					
				</div>
			</div>

			<div style="clear: both;"></div>
		</div>
	</div>

	<script src="access/Js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		/* Funcion para que el boton que abre el menu funcione */
		function toggleMenu(){
			let navigation = document.querySelector('.navigation')
			let toggle = document.querySelector('.toggle')
			navigation.classList.toggle('active');
			toggle.classList.toggle('active');
		}
	</script>
</body>
</html>