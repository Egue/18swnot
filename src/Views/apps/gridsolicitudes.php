<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Fecha</th>
			<th>Titulo</th>
			<th>Descripción</th>
			<th>Persona</th>
			<th>Edición</th>
			
		</tr>
	</thead>
	<tbody>
			<?php
				require_once"src/Controllers/SolicitudesController.php";

				$objSolicitudes = new SolicitudesController();
				$objSolicitudes -> allSolicitudes();

			?>
	</tbody>
</table>
