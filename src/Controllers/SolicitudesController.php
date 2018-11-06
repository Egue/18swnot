<?php

require_once"src/Models/SolicitudesModel.php";

/**
 * 
 */
class solicitudesController
{
	
	public function allSolicitudes(){

		$getsolicitudes = SolicitudesModel::allSolicitudes("Solicitudes");
		foreach ($$getsolicitudes as $key ) {
			
		}

	}
}





?>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Titulo</th>
			<th>Descripción</th>
			<th>Persona</th>
			<th>Imagen</th>
			<th>Solución</th>
			<th>Activo</th>
		</tr>
	</thead>
</table>