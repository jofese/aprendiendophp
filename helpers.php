<?php
	
	//creamos una funcion que llama a un archivo php
	function view($template, $vars=array()){

		/*
			Extrae todos los campos de un arreglo y los convierte en variables
		*/
		extract($vars); 

		require "$template.php";

	}