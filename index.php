<?php
$request = $_SERVER['REQUEST_URI'];
$urlStrings = explode("/", $request);

switch ($urlStrings[1]) {
		case 'portfolio':
			include('templates/project-category.php');
			break;
		case 'projeto':
			include('templates/project-template.php');
			break;
		case 'animacao':
		case 'fotografia':
			include('templates/galeria.php');
			break;
		case 'contactos':
			include('templates/contacts.php');
			break;
		case 'procurar':
			include('templates/search.php');
			break;
		case 'sobre-projeto':
		case 'sobre-mim':
			include('templates/simple-article.php');
			break;
		default:
			include('templates/index.php');
}
?>
