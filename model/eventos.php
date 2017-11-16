<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

 
  
	class Evento extends Conexion{
		  
		public function registroEvento($Nombre, $Fecha, $Imagen, $Descripcion){
	    
			parent::conectar();	
			
			#Guardamos los datos en la base de datos;
			parent::query("INSERT INTO eventos (Nombre, Fecha, Imagen, Descripcion) VALUES ('".$Nombre."','".$Fecha."','".$Imagen."','".$Descripcion."')");
		
			parent::cerrar();
			
		} 
		
		

	}

?>
