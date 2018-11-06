<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/Views/file/bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="src/Views/file/bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

</head>
<body>
	<header>
		<?php

			require_once "src/Controllers/Controller.php";
			$obj = new Controller();
			$obj -> includeMenu();
		?>
	</header>
	<div class="container">
		<?php
			
			$obj -> enlaces();

		?>
	</div>


</body>
</html>