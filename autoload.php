<?php

	spl_autoload_register(function($class_name){

		if(file_exists('App/Controlador/'.$class_name.'.php')){

			require_once 'App/Controlador/'.$class_name.'.php';
		}

		if(file_exists('App/Modelo/'.$class_name.'.php')){

			require_once 'App/Modelo/'.$class_name.'.php';
		}
	});