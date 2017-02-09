
<?php

//Página/

$request = $_SERVER['REQUEST_URI'];

$urlStrings = explode("/", $request);

switch ($urlStrings[1]) {
		case 'projetos':
			include('templates/project-category.php');
			break;
		case 'fotografia':
			include('templates/galeria.php');
			break;
		default:
			include('templates/index.php');
}


?>