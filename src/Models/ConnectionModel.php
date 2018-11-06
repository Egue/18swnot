
<?php

/**
 * 
 */
class ConnectionModel
{
	
	public function conectar(){
		$usuario = "root";
		$pass	=	"ikaros";

		$conn = new PDO("mysql:host=localhost;dbname=18swnot;charset=utf8", $usuario, $pass);

		return $conn;

	}
}

?>