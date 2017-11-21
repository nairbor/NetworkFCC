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
		public function borrarEvento($Id){
	    
			parent::conectar();	
			
			#Borramoslos datos en la base de datos;
			parent::query("DELETE FROM eventos WHERE InEvent = '$Id' LIMIT 1");
		
			parent::cerrar();
			
		}	
		public function guardarImagen($foto,$nombrefoto,$x){
		
			if ($x > 0){
				echo "Error: " . $x . "<br>";
						
			}else{
				echo "Nombre: " . $nombrefoto . "<br>";
			}
		
			#Ruta de a donde se mandara la imagen ALAN
			//$target_path = '/wamp64/www/NetworkFCC/medios/'. basename( $nombrefoto);
			
			#Ruta de a donde se mandara la imagen MARIO
			$target_path = '/xampp/htdocs/blog8/medios/'. basename( $nombrefoto);
			
	
			if(move_uploaded_file($foto, $target_path)) { 
				echo "El archivo ". basename( $nombrefoto ). " ha sido subido";
			} else{
				echo "Ha ocurrido un error, trate de nuevo!";
			}	
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
