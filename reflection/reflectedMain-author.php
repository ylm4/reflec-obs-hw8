<?php

require_once('main8.php');
require_once('authorclass.php');

function main8Author(){
	$nombre = new main8('Abel','Vega');
	$Author = new Author();
	$Author->nombre($nombre);
}

main8Author();
?>

	
