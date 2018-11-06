<?php

require_once "src/Models/ConnectionModel.php";
/**
 * 
 */
class SolicituesModel extends ConnectionModel
{
	
	public function allSolicitudes($tabla){

		$conn->prepare("SELECT * FROM $tabla");
		//$conn->bindParam(":tabla",$tabla,PDO::PARAM_STR);
		$conn->execute();
		
		return $conn->fecthall();

	}
}

?>