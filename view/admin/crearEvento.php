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
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
    
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
		</header>

		<!-- end header -->
        <section id="featured" class="bg">
            <div class="container">
                <div class="row">
                    <div class="top text-center">
                            <h3>Agregar Evento</h3>
                        </div>
                       <div class="col-sm-12">
                                    <hr class="colorgraph ">
                                    </div>
                </div>
                <div class="row">
                    <form name="registrar" method="POST" action="../../controller/eventoController.php" enctype="multipart/form-data"  enctype="multipart/form-data" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
			
                        
                        <div class="_container">
                            
                                    <label class="col-sm-3 control-label"><b>Fecha:</b></label> 
                                    <div class="col-sm-9">
                                    <input type="date" name="Fecha" class="form-control fj-date margen-inferior" required>
                                    </div>
                                    <label class="col-sm-3 control-label"><b>Nombre del evento: </b></label>
                                    <div class="col-sm-9">
                                    <input type="text" name="Nombre" class="form-control margen-inferior">
                                    </div>
                                    <label class="col-sm-3 control-label"><b>Descripción:</b></label>
                                    <div class="col-sm-9">
                                    <input name="Descripcion" class="form-control margen-inferior">
                                    </div>
                                    <label class="col-sm-3 control-label "><b>Nombre de la imagen:</b></label>
                                    <div class="col-sm-9 margen-inferior">
                                    <input type="file" name="Imagen" id="Imagen" class="">
                                    </div>
                                    <div class="col-sm-12">
                                    <hr class="colorgraph ">
                                    </div>
                                    <div class="col-xs-4 col-xs-offset-4 ">
                                    
                                    <input type="submit" name="registrar" class="btn btn-info btn-block" value="Registrar"> 

                                    </div>
                                
                        </div>
                    </form>
                    
                
                
			         
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
