<?php
	ini_set("default_charset", "UTF-8");
	error_reporting(0);

	$url = "https://www.tiempo.com/peticionBuscador.php?lang=es&texto=".$name;

	$data = file_get_contents($url);
	$characters = json_decode($data,true);

	$id = [];
	$name_country_search = [];

	$nivel1 = [];
	$nivel2 = [];
	$nivel3 = [];
	$nivel4 = [];


	$max = sizeof($characters['localidad']);

	for ($i = 0; $i <= $max; $i++) {
		$id[$i] = $characters['localidad'][$i]['id'];
		$name_country_search[$i] = $characters['localidad'][$i]['nombre'];
		$nivel1[$i][0] = $characters['localidad'][$i]['jerarquia'][0];
		$nivel2[$i][1] = $characters['localidad'][$i]['jerarquia'][1];
		$nivel3[$i][2] = $characters['localidad'][$i]['jerarquia'][2];
		$nivel4[$i][3] = $characters['localidad'][$i]['jerarquia'][3];
	}

	



?>