<?php

require_once "src/Models/ConnectionModel.php";
/**
 * 
 */
class SolicitudesModel
{
	
	public function allSolicitudes($tabla, $tabla2){

		$sql = ConnectionModel::conectar()->prepare("
			SELECT *,nombre FROM $tabla INNER JOIN $tabla2 ON 
			$tabla.id_persona = $tabla2.id");
		//$conn->bindParam(":tabla",$tabla,PDO::PARAM_STR);
		$sql->execute();
		
		return $sql->fetchAll();

	}
}

?>