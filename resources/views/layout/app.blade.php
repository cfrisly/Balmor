<!DOCTYPE html>
<html lang="es">
<head>
	<title>Balmor - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="description" content="Arquitecture Balmor">
	<meta name="keywords" content="html, template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div id="preloader">
		<!--<div class="loader"></div>-->
	</div>

	<!-- Header section start -->
	<header class="header-area">
		<a href="home.html" class="logo-area">
			<img src="img/logo.png" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="phone-number">(502)54695664</div>
		<nav class="nav-menu">
			<ul>
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="#">Nosotros</a></li>
				<li><a href="#">Servicio</a></li>
			</ul>
		</nav>
	</header>
	@yield('contenido')
</body>
</html>