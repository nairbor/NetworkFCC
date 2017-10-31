<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Registro N-FCC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/miestilo.css" rel="stylesheet" />


	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

</head>

<body>



    <div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-2 hidden-sm hidden-xs">							
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
                            </form>									
						</div>
						<div class="col-xs-10 col-xs-offset-1 hidden-md hidden-lg">							
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
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form role="form" class="register-form">
							<h2>Por favor registrate <small>Es gratis.</small></h2>
							<hr class="colorgraph">
							<div class="row">
							</div>
							<label class="sr-only" for="user">Nombre</label>
							<div class="form-group">
							    
								<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Ingresa tu nombre" >
							</div>
							<div class="form-group">
							    <label class="sr-only" for="user">Email</label>
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Ingresa tu correo" >
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
								        <label class="sr-only" for="clave">Contraseña</label>
										<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Ingresa tu contraseña" >
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
									    <label class="sr-only" for="clave">Verificar contraseña</label>
										<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Verifica contraseña" >
									</div>
								</div>
							</div>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" value="Registro" class="btn btn-info btn-block btn-lg"></div>
							</div>
						</form>
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
    </div>
	
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/operaciones.js"></script>


</body>

</html>
