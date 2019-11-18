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
	<!-- Page Preloader -->
	<div id="preloder">
		<!--<div class="loader"></div>-->
		<div class="loader"></div>
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
						<h2>Minimalista <br>Arquitectura <br> y más</h2>
						<a href="#" class="site-btn sb-light">Ver Proyecto</a>
					</div>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-conntent">
						<h2>Minimalista <br>Arquitectura <br> y mas</h2>
						<a href="" class="site-btn sb-light">Ver Proyecto</a>
					</div>
				</div>
			</div>
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text">Balmore</div>
	</section>
	<!-- Hero section end -->

	<!-- Intro section start -->
	<section class="intro-section pt100 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 intro-text mb-5 mb-lg-0">
					<h2 class="sp-title">Somo la solución a tu espacio, reserva para tu <span>Evento</span></h2><p>ver más</p>
					<a href="#" class="site-btn sb-dark">Ver proyecto</a>
				</div>
				<div class="col-lg-5 pt-4">
					<img src="img/intro.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end-->

	<!-- Service section start-->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Servicios</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/1.png">
							</div>
						</div>
						<h3>Bodas y 15 años</h3>
						<p>Balmore pone a tu disposición servicios para bodas y 15 años, con una capacidad para un maximo de 100 personas. No dudes en preguntar por nuestros precios especiales por apertura, recerba tu lugar.  Más información el peestaña de contacto.</p>	
						<a href="#" class="readmore">Leer mas</a>
					</div>
				</div>
				<div col-lg-4 col-md-6>
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/2.png">
							</div>
						</div>
						<h3>Graduaciones</h3>
						<p>Somos la solución cuando necesites espacio para graduaciones al aire libre, no dudes en contactarnos para mayor información, precios especiales por apertura todo el mes de diciembre</p>
						<a href="#" class="readmore">Leer mas</a>
					</div>
				</div>
				<div col-lg-4 col-md-6>
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="">
							</div>
							<h3>Convivios</h3>
							<p>Se acerca las fiestas de fin de año, y con ello las actividades de convivencia, por lo que ponemos a su disposicion el espacio para que te la pases con amigos familia o compañeros de trabajo, reserva tu espacio con nosotros, precios especiales por apertura.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->

	<!-- CTA section start -->
	<section class="cta-section pt100 pb50">
		<div class="cta-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h2 class="sp-title">Modern <span>home</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- CTA section end -->
	@yield('contenido')
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>