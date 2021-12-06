<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
<title>TALUD</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="Bootstrap, Landing page, Responsive, Businnes, Portfolio, Corporate"> 
<meta name="Author" content="WebThemez">  
<!-- CSS Files -->
<link href="assets-dashboard/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="assets-dashboard/css/font-awesome.min.css" rel="stylesheet">
<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
 <link href="assets-dashboard/css/animate.css" rel="stylesheet" media="screen">
<link href="assets-dashboard/css/owl.theme.css" rel="stylesheet">
<link href="assets-dashboard/css/owl.carousel.css" rel="stylesheet">
 
<link href="assets-dashboard/css/styles.css" rel="stylesheet" media="screen">    

<!-- Google Fonts --> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:100,300,400,700' rel='stylesheet' type='text/css'>


<!-- Font Awesome -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> 
<link rel="shortcut icon" href="/assets-dashboard/css/logo_t.png">
</head>
  
<body data-spy="scroll" data-target="#navbar-scroll">

<div id="top"></div>

<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
				<a class="navbar-brand"><img src="/assets-dashboard/css/logo m.png"  width="200" height="40"></a>
			 
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-themers navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#top">INICIO</a></li>
					<li><a href="#intro">TALUD</a></li>
					<li><a href="#feature">MÓDULOS</a></li> 
					<li><a href="#funcionalidad">FUNCIONALIDADES</a></li>
					<li><a href="#ventajas">VENTAJAS</a></li>
					<li><a href="#contacto">CONTACTO</a></li>
					<li>@auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">INICIAR SESION</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTRO</a>
                        @endif
                    @endauth</li> 	
            </ul>
			  </div>
		</div>
	</nav>
</div>
 
<div class="fullscreen landing parallax banner" data-img-width="2000" data-img-height="1325" data-diff="100">
	
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				 
						<h1 class="wow fadeInLeft">
						<center>TALUD</center>
						</h1>
 
					<div class="landing-text wow fadeInLeft">
						<center><p>Sistema de control de materiales.</p></center>
					</div>				  

					<!-- header button -->
					<div class="head-btn wow fadeInLeft">
						<a href="#" class="btn-primary app-store">
						<span>Nuestros Servicios</span>
						</a>
						<a href="#" class="btn-primary play-market">
						<span>Acerca de nosotros</span>
						</a>
					</div>
				</div> 				
				<!-- phone image -->
				<div class="col-md-6">
				<img src="/assets-dashboard/css/imagen.png"  class="header-phone img-responsive wow fadeInRight">
				</div>
			</div>
		</div> 
	</div> 
</div>
   
<!-- intro section -->
<div id="intro">
		<div class="container">
		<div class="row">
	
	<!-- feature image -->
			<div class="col-md-6 feature-2-pic wow fadeInLeft">
				<img src="/assets-dashboard/css/imagen1.png" alt="image" class="img-responsive">
			</div>	
			
			<!-- feature content -->
			<div class="col-md-6 wow fadeInRight">
				<span>Acerca de</span>
				<h2>TALUD</h2>
				<p>Es un software de control de los materiales para aquellas empresas que manejan cualquier tipo de material para la construcción.
					Talud ofrece la información completamente actualizada.Este sistema brindará un reporte claro de los materiales
					 y describira lo que se le brinda al cliente, la calidad y seguridad en todos los tipos datos.</p>
			</div>			 			  
		</div>			  
	</div>
</div>

<!-- feature section -->
<div id="feature">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

			<!-- feature title -->
				<h2>Módulos con los que cuenta TALUD</h2>
			</div>
		</div>
		<div class="row row-feat">
			
			<div class="col-md-12">

				<!-- feature 1 -->
				<div class="col-sm-5 feat-list">
					<i class="fa fa-paint-brush wow fadeInUp"></i>
					<div class="inner">
						<h4>Obras</h4>
						<p>En este módulo se pueden visualizar los proveedores de cada material con su correspondiente información.</p>
					</div>
				</div>			
				<!-- feature 2 -->
				<div class="col-sm-5 feat-list">
					<i class="fa fa-gavel wow fadeInUp" data-wow-delay="0.2s"></i>
					<div class="inner">
						<h4>Materiales</h4>
						<p>En este módulo se pueden ver los materiales por medio de un inventario con sus respectivas actualizaciones y descripciones.</p>
					</div>
				</div>			
				<!-- feature 3 -->
				<div class="col-sm-5 feat-list"> 
					<i class="fa fa-user wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<h4>Usuarios</h4>
						<p>En este módulo se podran visualizar los usuarios que hay en el sistema.</p>
					</div>
				</div>

				<!-- feature 4 -->
				<div class="col-sm-5 feat-list"> 
					<i class="fa fa-users wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<h4>Clientes</h4>
						<p>En este módulo se podran visualizar los clientes que interactuan con el sistema.</p>
					</div>
				</div>
			
				<!-- feature 5 -->
				<div class="col-sm-5 feat-list"> 
					<i class="fa fa-shopping-cart wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<h4>Proveedores</h4>
						<p>En este módulo se podran visualizar los proveedores de cada material con su correpondiente informacion y descripcion.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div id="funcionalidad"></div>
<section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInRight animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; -webkit-animation-delay: 0.8s; animation-name: fadeInRight; -webkit-animation-name: fadeInRight;">
                    <h2 class="title">Funcionalidades</h2>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Inventarios</h4>
                                <p>Con esta funcionalidad se puede ver que cantidad de material hay disponible 
								en la constructora para poder realizar las obras correspondientes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <i class="fa fa-print"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Reportes</h4>
                                <p>Por medio de los reportes se puede pedir un material a un proveedor y tambien se
									puede pedir un material para realizar una obra.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Control de materiales</h4>
                                <p>Con el control de materiales se puede tener un mejor manejo de los materiales y del
								inventario segun la disponibilidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; -webkit-animation-delay: 0.8s; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="block">
                        <img class="img-responsive" src="/assets-dashboard/css/imagen2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> 

<!-- feature section -->
<div id="ventajas"></div>
<div id="feature">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

			<!-- feature title -->
				<h2>Ventajas de TALUD</h2>
			</div>
		</div>
		<div class="row row-feat">
			
			<div class="col-md-12">

				<!-- feature 1 -->
				<div class="col-sm-5 feat-list">
					<i class="fa fa-check-circle wow fadeInUp"></i>
					<div class="inner">						
						<p>Mayor sistematizacion en el área de control de materiales.</p>
					</div>
				</div>			
				<!-- feature 2 -->
				<div class="col-sm-5 feat-list">
					<i class="fa fa-check-circle wow fadeInUp" data-wow-delay="0.2s"></i>
					<div class="inner">
						<p>Mejor organización a nivel de materiales tanto en los proveedores y los clientes.</p>
					</div>
				</div>			
				<!-- feature 3 -->
				<div class="col-sm-5 feat-list"> 
					<i class="fa fa-check-circle wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<p>Manejo de reportes en PDF para mayor accesibilidad.</p>
					</div>
				</div>

				<!-- feature 4 -->
				<div class="col-sm-5 feat-list"> 
					<i class="fa fa-check-circle wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<p>Seguridad de datos tanto de materiales como de nuestros clientes.</p>
					</div>
				</div>			
				<!-- feature 5 -->
				<div class="col-sm-5 feat-list"> 
					<i class="fa fa-check-circle wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<p>Un servicio de calidad y compromiso.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div id="contacto"></div>
<!-- start cta-section -->
<section class="cta-section">
	<div class="container">
		<div class="row row-feat">
			<div class="col col-lg-5 col-md-5">
				
				<div class="ineer">
					<h3>Estemos En Contacto!</h3>
					<p>Si estas interesado en nosotros y te gustaria obtener mayor informacion comunicate con nosotros 
						te daremos la informacion necesaria y solucionaremos todas tus dudas!.</p>
				</div>
				<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2519166209877!2d-74.04448208573682!3d4.726248742752708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f85681aad627f%3A0x532c0c49d315728c!2sCl.%20145%20%2315-37%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1634699626258!5m2!1ses!2sco" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					
					</div>
			</div>
			<div class="col-sm-6 feat-list">
				<div class="contact-info">
					<div>
						<i class="fa fa-phone wow fadeInUp" data-wow-delay="0.3s"></i>
						<h4>Llamanos</h4>
						<p>654894754</p>
					</div>
					<div>
						<i class="fa fa-envelope wow fadeInUp" data-wow-delay="0.3s"></i>
						<h4>Correo</h4>
						<p>equipoTalud@gmail.com</p>
					</div>
					
				</div>
			</div>
		</div>
		
	</div> <!-- end container -->
	
</section>
<!-- end cta-section -->

			</div>	
			
		</div>
		
	</div>
</div>

<!-- footer -->
<footer id="footer">
	<div class="container">
		<h3>FORMULARIO DE CONTACTO:</h3>
<form action="enviar-formulario.php" method="post"><label>Nombre:</label>
<input maxlength="50" name="nombre" required size="50" type="text" autofocus placeholder="Escribe tu nombre" /><label>Email:</label>
<input name="email" required type="email" placeholder="Escribe tu email" /><br><br>
<textarea cols="50" name="observaciones" rows="8">
Dejanos aca tu mensaje...</textarea><br><br>
<input type="submit" value="Enviar" />
</form>
		<div class="col-sm-4 col-sm-offset-4">
			<!-- social links -->
			
				<div class="social text-center">
					<ul>
						<li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
						<li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>	
				
		</div>	
	</div>	
</footer>
	
	<!-- javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.sticky.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/ekko-lightbox-min.js"></script>
	<script type="text/javascript">
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); }); 
	</script>
	<script>
		new WOW().init();
	</script>
  </body>
</html>