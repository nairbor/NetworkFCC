<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }
	$mysqli = new mysqli("localhost","root","","networkfcc");
	
	$query="SELECT e.InEvent, e.Nombre, e.Fecha, e.Imagen, e.Descripcion, f.IdFavorito, f.IdUser, f.IdEvento FROM eventos e, favoritos f WHERE e.InEvent = f.IdEvento";
	$resultado=$mysqli->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Netword-FCC</title>
	    <link href="../../public/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../public/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="../../public/css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="../../public/css/style.css" rel="stylesheet" />
	<link href="../../public/css/miestilo.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="../../public/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="../../public/bodybg/bg1.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						 <a href="../../controller/cerrarSesion.php">
                                  <button type="button" name="button" class=" derecha btn btn-info margen-izquierdo">Cerrar sesion</button>
                                </a>      
                                <h4 class="derecha">Hola administrador <?php echo ucfirst($_SESSION['nombre']); ?>  </h4>
                         
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
						<a class="navbar-brand" href="index.php"><img src="../../public/img/logo.png" alt="" width="120" height="45" /></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="secretaria.php">Secretaría Academica</a></li>
							<li><a href="bolsa.php">Bolsa de Trabajo</a>
							<li><a href="servicio.php">Servicio Social</a>
						</ul>
					</div>
				</div>
			</div>
		</header>
		
        
        
        
        <section id="content">			
			<div class="container">
				<div class="row">
                <?php  while($row=$resultado->fetch_assoc()){ 
			     if ($row['IdUser'] == $_SESSION['id']){
	           ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="#" class="thumbnail">

                      <img src="../../medios/<?php echo $row['Imagen'];?>" width="200px" height="150px" alt="...">
                            </a>
                      <div class="caption text-center">
                        <h4><?php echo $row['Nombre'];?></h4>
                        <h5><?php echo $row['Fecha'];?></h5>
                        <p><?php echo $row['Descripcion'];?></p>

                        <a href="eliminarEvento.php?IdFavorito=<?php echo $row['IdFavorito'];?>"><button type="button" name="button" class="btn btn-info  margen-derecho">Eliminar</button></a>
                
                      </div>
                    </div>
                  </div>
                  <?php } } ?>
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
	<script src="../../public/js/jquery.min.js"></script>
	<script src="../../public/js/modernizr.custom.js"></script>
	<script src="../../public/js/jquery.easing.1.3.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="../../public/plugins/flexslider/flexslider.config.js"></script>
	<script src="../../public/js/jquery.appear.js"></script>
	<script src="../../public/js/stellar.js"></script>
	<script src="../../public/js/classie.js"></script>
	<script src="../../public/js/jquery.cubeportfolio.min.js"></script>
	<script src="../../public/js/google-code-prettify/prettify.js"></script>
	<script src="../../public/js/animate.js"></script>

