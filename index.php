<?php

	require 'config.php';
	require 'helpers.php';

	$titulo="Aprendiendo PHP";
	$nombre="Joel";

	/*
		compact se encarga de unir dos campos de un arreglo y enviarlos como un solo parametro
		reemplaza a ['nombre'=>$nombre,'titulo'=>$titulo]
	*/
	view('views',compact('nombre','titulo'));