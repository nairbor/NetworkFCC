<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../../index.php');
  }
  
	$mysqli=new mysqli("localhost","root","","networkfcc");
  
	$IdFavorito=$_GET['IdFavorito'];
	
	$query="DELETE FROM favoritos WHERE IdFavorito = '".$IdFavorito."'";
	
	$resultado=$mysqli->query($query);
	
  
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
            <h4 class="derecha">Hola usuario <?php echo ucfirst($_SESSION['nombre']); ?>  </h4>
          </div>
        </div>
      </div>
    </header>
    <section id="content">
      <div class="container">
        <div class="row">
          <hr class="colorgraph "> 
          <h4 class="text-center"> Se ha eliminado el evento selecionado </h4>
          <hr class="colorgraph ">
      	  <div class="col-xs-4 col-xs-offset-4 ">
          <a href="index.php">
            <button type="button" name="button" class="btn btn-info btn-block">regresar</button>
          </a>
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
