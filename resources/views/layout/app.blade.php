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
				<li><a href="">Portafolio</a></li>
				<li><a href="">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!--  Hero section start -->
	<section class="hero-section">
		<!-- left social link ber -->
		<div class="left-bar">
			<div class="left-bar-content">
				<div class="social-links">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
						<h2>Minimalistic <br>Architecture <br> and more</h2>
						<a href="#" class="site-btn sb-light">See Project</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text">architecture</div>
	</section>
	@yield('contenido')
</body>
</html>