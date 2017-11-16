<?php
// header("Content-Type: application/json; charset=UTF-8");
// print_r($_POST);

	require_once('../model/eventos.php');

	# Creamos un objeto de la clase Evento
	$evento = new Evento();
	
	if(isset($_POST['registrar'])) { 
		$Nombre = $_POST['Nombre'];
		$Fecha = $_POST['Fecha'];
		$Imagen = $_POST['Imagen'];
		$Descripcion = $_POST['Descripcion'];	
		}
		
		# Llamamos al metodo registro para pasar a la funcion de guardado
		$evento->registroEventoTaller($Nombre, $Fecha, $Imagen, $Descripcion);

		header("Location: ");
	
	}else {
        header("Location: ");
			 
		echo "Los datos no se guardan";
			
             }  
	//ob_end_flush()
  
?>
