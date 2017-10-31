<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Netword-FCC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/miestilo.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-12 hidden-sm hidden-xs ">							
                            <form class="form-inline  derecha">
                              <div class="form-group ">
                                <label for="user" >Usuario: </label>
                                <input type="text" class="form-control " id="user">
                              </div>
                              <div class="form-group">
                                <label for="pwd" >Contraseña: </label>
                                <input type="password" class="form-control" id="pwd">
                              </div>
                              <button type="submit" class="btn btn-info "> Entrar </button>
                              <button type="submit" class="btn btn-info "> Registrarse </button>
                            </form>									
						</div>
						<div class="col-xs-12 hidden-lg hidden-md">							
                            <form class="form-inline ">
                              <div class="form-group ">
                                <label for="user" >Usuario: </label>
                                <input type="text" class="form-control " id="user">
                              </div>
                              <div class="form-group">
                                <label for="pwd" >Contraseña: </label>
                                <input type="password" class="form-control" id="pwd">
                              </div>
                              <button type="submit" class="btn btn-info "> Entrar </button>
                              <button type="submit" class="btn btn-info "> Registrarse </button>
                            </form>									
						</div>
					</div>
				</div>
			</div>

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="120" height="45" /></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Inicio</a>
							</li>
							<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Secretaría Academica</a>
							<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Bolsa de Trabajo</a>
							<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Servicio Social</a>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="featured" class="bg">
				<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="main-slider flexslider">
							<ul class="slides text-center">
								<li>
								    <div class="margen-inferior">
										<h3>Servicio Social</h3>
										<p>REaliza tu Servcio en la DGIE</p>
										<a href="#" class="btn btn-theme">Leer más</a>
									</div>
									<img src="img/slides/flexslider/1.jpg" alt="" height="400px" class="img.responsive"/>
								</li>
								<li>
								    <div class="margen-inferior">
										<h3>Bolsa de trabajo</h3>
										<p>VW te esta buscando</p>
										<a href="#" class="btn btn-theme">Leer más</a>
									</div>
									<img src="img/slides/flexslider/2.jpg" alt="" height="400px" class="img.responsive"/>
								</li>
								<li>
								    <div class="margen-inferior">
										<h3>Secretaría Academica</h3>
										<p>Progrma integral de becas.</p>
										<a href="#" class="btn btn-theme">Leer más</a>
									</div>
									<img src="img/slides/flexslider/3.jpg" alt="" height="400px" class="img.responsive" />
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
        </section>
			
        <section id="content">			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2>Comunicate <small>sugerencias del sitio</small></h2>
						<hr class="colorgraph">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" data-rule="minlen:4" data-msg="Pro favor escribe tu nombre" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" data-rule="correo" data-msg="Por favor escribe un correo válido" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor escribe un asunto " />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Por favor escribe tu comentario" placeholder="Mensaje"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="btn btn-info btn-block btn-md">Enviar Mensaje</button></div>
						</form>
						<hr class="colorgraph">

					</div>
				</div>
			</div>
        </section>
		
		
		<footer>
			<div class="container">
		      <h3 class="text-center">Información adicional </h3>
				<div class="row">
					<div class="col-sm-4 ">
						<div class="widget">
							<h4>Secretaria Academica</h4>
							<ul class="link-list">
								<li>Responsable: <a href="#">MC. Maria del Consuelo Molina García </a></li>
								<li>Extensión: <a href="#">7204</a></li>
								<li>Cubículo: <a href="#">115 - CC02</a></li>
								<li>Correo: <a href="#">secre.academica2011@gmail.com</a></li>
								<li>Sitio web: <a href="#">http://www.cs.buap.mx/~secreacademica</a></li>
							</ul>
						</div>

					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h4>Bolsa de trabajo</h4>
							<ul class="link-list">
								<li>Responsable: <a href="#">M.C. Alma Delia Ambrosio Vázquez</a></li>
								<li>Extensión: <a href="#">7230</a></li>
								<li>Cubículo: <a href="#">103 S - CC01</a></li>
								<li>Correo: <a href="#">ambrosio@cs.buap.mx </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 ">
						<div class="widget">
							<h4>Servicio Social</h4>
							<ul class="link-list">
								<li>Responsable: <a href="#">M.C. Nelva Betzabel Espinoza Hernández </a></li>
								<li>Extensión: <a href="#">7236</a></li>
								<li>Cubículo: <a href="#">115 - CC02</a></li>
								<li>Correo: <a href="#">nespinoza@cs.buap.mx </a></li>
								<li>Sitio web: <a href="#">http://sersoc.cs.buap.mx/</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
		</div>-->
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="plugins/flexslider/flexslider.config.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>
