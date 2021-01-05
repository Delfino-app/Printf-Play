<?php

class controlador{


	public static function start(){

		include "App/Vista/Home.php";
	}

	public static function showpages(){

		if (isset($_GET['pg'])) {

			$pg = $_GET['pg'];
			
			if (!isset($_SESSION['inside'])) {
				
				controlador::rotasSite($pg);
			}
		}
		else{


			include "App/Vista/Site.php";
		}
	}

	public static function rotasSite($pg){

		if($pg == "inicio"){
				
			include "App/Vista/Site.php";
		}
		elseif($pg == "entrar"){

			include "App/Vista/Site/login.php";
		}
		elseif($pg == "criarConta"){

			include "App/Vista/Site/criarConta.php";
		}
		elseif($pg == "inside"){

			include "App/Vista/Sistema/inicio.php";
		}
	}
}