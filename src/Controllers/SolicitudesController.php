<?php

require_once"src/Models/SolicitudesModel.php";

/**
 * 
 */
class solicitudesController
{
	
	public function allSolicitudes(){

		$getsolicitudes = SolicitudesModel::allSolicitudes("Solicitudes","personas");
		foreach ($getsolicitudes as $key ) {
			echo "<tr>
					<td>".$key["id"]."</td>
					<td>".$key["fecha_inicio"]."</td>
					<td>".$key["titulo"]."</td>
					<td>".$key["descripcion"]."</td>
					<td>".$key["nombre"]."</td>
					<td><a href='index.php?idupdate=".$key["id"]."'><button type='button' class='btn btn-success'>Editar</button></a></td>
				</tr>";
		}

	}
}

?>

