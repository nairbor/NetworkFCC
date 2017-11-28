<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }
	
	require_once('../../model/eventos.php');

	# Creamos un objeto de la clase Evento

	
	//echo $resultado = $evento->mostrarEvento();

	$mysqli=new mysqli("localhost","root","","networkfcc");
	
	$query="SELECT InEvent, Nombre, Fecha, Imagen, Descripcion FROM eventos";
	$resultado=$mysqli->query($query);
		
		
		
	
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
							     <div class="col-xs-12 col-sm-6 ">
                                <h4 class="text-center">Hola administrador <?php echo ucfirst($_SESSION['nombre']); ?>  </h4>
                                </div>    
                                <div class="col-xs-6 col-sm-3">
                              	<a href="../../controller/cerrarSesion.php">
                                  <button type="button" name="button" class="derecha btn btn-info ">Cerrar sesion</button>
                                </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 ">
                                <a href="crearEvento.php">
                                  <button type="button" name="button" class="btn btn-info  margen-derecho">Crear evento</button>
                                </a>
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

		<!-- end header -->
        <section id="content">
        <div class="container">
        <div class="row">
        <?php while($row=$resultado->fetch_assoc()){ ?>
		
				
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <a href="#" class="thumbnail">
    
      <img src="../../medios/<?php echo $row['Imagen'];?>" width="200px" height="150px" alt="...">
            </a>
      <div class="caption text-center">
        <h4><?php echo $row['Nombre'];?></h4>
        <h5><?php echo $row['Fecha'];?></h5>
        <p><?php echo $row['Descripcion'];?></p>
       
        <a href="eliminarEvento.php?id=<?php echo $row['InEvent'];?>"><button type="button" name="button" class="btn btn-info  margen-derecho">Eliminar</button></a>
       
        <a href="modificarEvento.php?id=<?php echo $row['InEvent'];?>"><button type="button" name="button" class="btn btn-info">Modificar</button></a>
       
      </div>
    </div>
  </div>
			
	   <?php } ?>
			
		</div>
        </div>
        </section>
		
	</div>
      
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
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->

    
	
	
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

	
  </body>
</html>
