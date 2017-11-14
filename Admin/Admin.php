<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-md-6">
            <div class="container">
              <!-- <h2>Carousel Example</h2> -->  
              <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                <!--    <img src="la.jpg" alt="Los Angeles" class="img-responsive" style="width:100%;"> -->
                       <div class="carousel-content">
                        <div class="form-group">
                          <label for="evento">Nombre del evento:</label>
                          <input type="text" class="form-control" id="evento">
                        </div>
                        <div class="form-group">
                          <label for="lugar">Lugar:</label>
                          <input type="text" class="form-control" id="lugar">
                        </div>
                        <div class="form-group">
                          <label for="fecha">Fecha:</label>
                          <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                          </div>
                        </div>
                        <a href="evento.html" class="btn btn-primary btn-lg hvr-underline-from-left" role="button">Enviar</a>
                        </div>
                          <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker();
                            });
                        </script>  
                      <!-- <div class="carousel-caption">
                            <h3>Agregar evento</h3>
                        </div> -->
                  </div>

                  <div class="item">
                    <img src="chicago.jpg" alt="Chicago"class="img-responsive"  style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="ny.jpg" alt="New york" class="img-responsive" style="width:100%;">
                  </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
            </div>
        </div>
        <div class="col-md-6">
        Plugin  Redes sociales
           
        </div>
    </div>
    
</div>

</body>
</html>
