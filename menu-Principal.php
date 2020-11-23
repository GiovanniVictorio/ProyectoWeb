<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Planet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="access/Css/styles-menu-principal.css">
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
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
						<span class="title">Home</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-film" aria-hidden="true"></i>
						</span>
						<span class="title">Categories</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon">
							<i class="fa fa-question-circle-o" aria-hidden="true"></i>
						</span>
						<span class="title">Help</span>
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
		
		<section>
			<div class="buscador">
				<input type="text" name="" placeholder=" Movie Search">
				<button>
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
		</section>
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