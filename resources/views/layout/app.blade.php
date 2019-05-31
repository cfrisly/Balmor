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
	</header>
	@yield('contenido')
</body>
</html>