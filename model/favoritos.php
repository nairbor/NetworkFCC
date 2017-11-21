<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

	class Favorito extends Conexion{
		  
		public function registroFavorito($IdUser, $IdEvento){
	    
			parent::conectar();	
			
			#Guardamos los datos en la base de datos;
			echo "INSERT INTO favoritos (IdUser, IdEvento) VALUES ('".$IdUser."','".$IdEvento."')";
			
			parent::query("INSERT INTO favoritos (IdUser, IdEvento) VALUES ('".$IdUser."','".$IdEvento."')");
		
			parent::cerrar();
			
		}
			
		
		
		public function mostrarEvento(){
	    
			parent::conectar();	
			
			#Mostramos los datos en la base de datos;
			$varx = parent::query('$query="SELECT InEvent, Nombre, Fecha, Imagen, Descripcion FROM eventos"');
			//parent::cerrar();
			return $varx;
			
		}
			
		public function modificarEvento($Nombre, $Fecha, $Imagen, $Descripcion, $InEvent){
			parent::conectar();	
			
			#Guardamos los datos en la base de datos;
			parent::query("UPDATE eventos SET Nombre = '".$Nombre."', Fecha = '".$Fecha."', Imagen = '".$Imagen."', Descripcion = '".$Descripcion."' WHERE InEvent = '".$InEvent."'");
		
			parent::cerrar();
		}

	}

?>
