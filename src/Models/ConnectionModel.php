
<?php

/**
 * 
 */
class ConnectionModel
{
	
	public function conectar(){
		$usuario = "root";
		$pass	=	"";

		$conn = PDO("mysql:host=localshot;dbname=18swnot;charset=utf8", $usuario, $pass) 

	}
}

?>