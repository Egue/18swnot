<?php 

/**
 * 
 */
class Controller{
	
	public function includeMenu(){
		include ("src/Views/menu.php");


	}

	public function template(){

		require_once "src/Views/Template.php";

	}

	public function enlaces(){

		if (isset($_GET["action"])) {
			
			$enlaces = $_GET["action"];
			$arrayEnlaces = array("camera","doc");

			if (in_array( $enlaces, $arrayEnlaces)) {

				require_once"src/Views/apps/".$enlaces.".php";
			}else{
				echo "no esta";
			}

	}

	}
}

 ?>