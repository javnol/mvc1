<?php
	// pmvc1.php
	header("Content-type: image/png");
	require_once("Modelo.php");
	require_once("Vista1Pastel.php");
	require_once("Controlador.php");
	$m = new Modelo(50, 30, 20);
	$v = new Vista1Pastel();
	$c = new Controlador($m, $v);
	$c->exhibir(); 
?>