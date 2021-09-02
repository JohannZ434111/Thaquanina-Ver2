<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Thaqhaniña - Menu</title>
	<link rel="shortcut icon" href="img/minilogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/minilogo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" media="screen">
    <meta name="robots" content="noindex,follow" />
	</ul>

</head>

<body>
	
	<nav>
		<img src="img\logo.png" align="top">
		<a href="#first"><i class="far fa-user">Buscar</i></a>
		<a href="#second"><i class="fas fa-briefcase">Sitios</i></a>
		<a href="#third"><i class="far fa-file">Guardados</i></a>
		<a href="#fourth"><i class="far fa-address-card">Usuario</i></a>
	  </nav>
	  
	  <div class='container'>
		<section id='first'>
		  <form>
			<p><p><h1>Busqueda por Texto</h1></p></p>
			<div class="input-group">
				<input type="search" class="form-control rounded" placeholder="Ingrese una Direccion" aria-label="Search"
				  aria-describedby="search-addon" />
				<button type="button" class="btn btn-success">Buscar</button>
			  </div>
		  </form>
		</section>
	  
		<section id='second'>
			<form>
				<h1>Sitios de Comida Disponibles</h1>
				<div style="text-align: center;">
				<button type="button" class="btn btn-success">Cadenas/Comida Rapida</button>
				<button type="button" class="btn btn-success">Restaurantes</button>
				<button type="button" class="btn btn-success">Huecas</button>
			    </div>
			</form>
		</section>
	  
		<section id='third'>
		  <form>
		  <h1>Sitios Guardados</h1>
		  </form>
		</section>
	  
		<section id='fourth'>
		  <form>
			<div style="text-align: center;">
		  <h1>Informacion de Usuario</h1>
		  <button type="button" class="btn btn-success" href="">Salir</button>
		  </div>
		  </form>
		</section>
	  </div>

</body>

</html>