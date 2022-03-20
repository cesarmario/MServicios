<?PHP include('funciones/conexion.php'); ?> 
<!DOCTYPE HTML>
<html lang="es">
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MicroServicios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Microservicios <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="destination.html">Servicios</a></li>
						<li class="has-dropdown">
							<a href="#">Prestaciones</a>
							<ul class="dropdown">
								<li><a href="#">Europe</a></li>
								<li><a href="#">Asia</a></li>
								<li><a href="#">America</a></li>
								<li><a href="#">Canada</a></li>
							</ul>
						</li>
						<li><a href="pricing.html">Usuario</a></li>
						<li><a href="contact.html">Contacto</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h2><b>MICROSERVICIOS</b> es un sitio WEB que tiene gran alcance en la comunidad, tu servicio será visible para más clientes, 
							logrando potenciar tus prestaciones. Crea tu perfil y vende tus servicios.</h2>
							<span class="btn btn-primary">Iniciar Sesión</span>
							<span class="btn btn-primary">Registrate</span>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>¿Qué servicio necesitas hoy?</h3>
											<form action="#">
												<!--div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Your Name</label>
														<input type="text" id="fullname" class="form-control">
													</div>
												</div-->
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Servicio</label>
														<?PHP $qrubro1=mysqli_query($conexion,"SELECT * FROM rubros ORDER BY descripcion  "); ?>
														<select data-placeholder="Rubro" class="form-control" name="rubro" id="rubro">
															<option selected value=""></option>
															<?PHP while($rub1=mysqli_fetch_assoc($qrubro1)){?>
																<option value="<?PHP echo strtoupper($rub1['descripcion']);?>"><?PHP echo strtoupper($rub1['descripcion']);?></option>
															<?PHP } ?>      
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Categoría</label>
														<div id="especialidad"></div>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Localidad</label>
														<?PHP $qlocal=mysqli_query($conexion,"SELECT * FROM localidades ORDER BY nombre"); ?>
														<select data-placeholder="Localidad" class="form-control" name="local" id="local">
															<option selected value=""></option>
															<?PHP while($local=mysqli_fetch_assoc($qlocal)){?>
																<option value="<?PHP echo strtoupper($local['nombre']);?>"><?PHP echo strtoupper($local['nombre']);?></option>
															<?PHP } ?>      
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Buscar">
													</div>
												</div>
												<!--div class="row form-group">
													<div class="col-md-12">
														<input type="button" class="btn btn-primary btn-block" value="Iniciar sesi&oacute;n">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="button" class="btn btn-primary btn-block" value="Registrate">
													</div>
												</div-->
											</form>	
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Servicios más buscados</h2>
					<p>Los servicios más demandados por la comunidad de Microservicios para permitir una búsqueda más rápida.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/oficios/electricista.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/oficios/electricista.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Electricidad</h2>
							<p>Servicio de Electricidad abarca: instalación eléctrica, mantenimiento, reparación, planos eléctricos domiciliarios o industriales, consultoría, entre otros.</p>
							<p><span class="btn btn-primary">Buscar</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/oficios/plomeria.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/oficios/plomeria.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Plomería</h2>
							<p>Servicio de Plomería abarca: instalación de artefactos o cañerías de agua/cloaca, mantenimiento, reparación, planos domiciliarios o industriales, consultoría, entre otros</p>
							<p><span class="btn btn-primary">Buscar</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/oficios/abogacia1.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/oficios/abogacia.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Abogacía</h2>
							<p>Servicio de Abogacía abarca: Asesoría/Representación/Gestión Civil, Comercial, Penal, Familia, Internacional, Laboral, Societario, entre otros.</p>
							<p><span class="btn btn-primary">Buscar</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/oficios/cocinero-chef.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/oficios/cocinero-chef.jpeg alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Cocinero/Chef</h2>
							<p>Servicio de Cocinero/Chef abarca: Asesoría/Cocina en eventos públicos, fiestas, casamientos. Cocina tradicional, nacional e internacional, comida rápida, entre otros.</p>
							<p><span class="btn btn-primary">Buscar</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/oficios/contador.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/oficios/contador.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Contabilidad</h2>
							<p>Servicio de Contabilidad abarca: Asesoría/Representación/Gestión Administrativa, Comercial, Impositiva, Empresas, Monotributistas, AFIP, entre otros.</p>
							<p><span class="btn btn-primary">Buscar</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/oficios/veterinario.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/oficios/veterinario.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Veterinaria</h2>
							<p>Servicio de Veterinaria abarca: Asesoría/Asistencia/Control, cirugía de perros, gatos y otros animales domésticos, animales de granja, alimentos, entre otros.</p>
							<p><span class="btn btn-primary">Buscar</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>¿Cómo ser proveedor de Servicios?</h2>
					<p>Sé parte de la comunidad más grande de servicios y soluciones integrales del mercado.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Datos Personales</h3>
						<p>Consignar los datos personales tal cual aparecen en su DNI, como así también el domicilio y teléfono de su espacio de trabajo.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Datos del Servicio</h3>
						<p>Detallar el servicio que Usted brinda, la forma en que lo realiza (presencial o virtual) y que puede aportar al potencial cliente.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Disponibilidad y Cobertura</h3>
						<p>Es importante destacar el horario de trabajo y el área geográfica donde puede brindar el servicio.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>Microservicios potencia el alcance de tus servicios. <br> Probá con nosotros.</h1>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Microservicios en números.</h2>
					<p>Unite a nuestra comunidad de prestadores <br> y usuarios, día a día creciendo.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Servicios/ <br>categorías</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Prestadore <br>Registrados</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Usuarios <br>Registrados</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Comunidad <br>Satisfecha</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Registrá tu servicio</h2>
					<p>Es simple y rápido</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Ingresá tu email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Registrate</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Sobre Microservicios</h3>
						<p>Microservicios nació en el 2022, a partir de la necesidad de concentrar las miles de búsquedas difuminadas de servicios, oficios o profesionales que existen, como así también de dar la posibilidad a aquellos de publicar sus trabajos o habilidades. La misión es unir la oferta y la demanda.</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Información:</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Términos y condiciones (Generales)</a></li>
							<li><a href="#">Términos y condiciones (Prestadores)</a></li>
							<li><a href="#">Privacidad</a></li>
							<li><a href="#">Preguntas frecuentes (FAQ's)</a></li>
							<li><a href="#">Información y consejos</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Servicios y Profesionales:</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Servicios registrados</a></li>
							<li><a href="#">Prestadores</a></li>
							<li><a href="#">Categorías</a></li>
							<li><a href="#">Destacados</a></li>
							<li><a href="#">Micro Prestadores</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Contacto - Redes:</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i>microservicios.fb</a></li>
							<li><a href="#"><i class="icon-mail2"></i>microservicios.info@gmail.com</a></li>
							<li><a href="#"><i class="icon-chat"></i>microservicios.ig</a></li>
							<li><a href="#"><i class="icon-chat"></i>microservicios.in</a></li>
							<li><a href="#"><i class="icon-chat"></i>microservicios.tw</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>
	

	</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$('#rubro').val(0);
	recargarLista();

	$('#rubro').change(function(){
		recargarLista();
	});
})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"funciones/especialidad_lista.php",
			data:"idrubro=" + $('#rubro').val(),
			success:function(r){
				$('#especialidad').html(r);
			}
		});
	}
</script>