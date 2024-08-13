<?php

class ErrorHandler
{
	public static function badRequest400(){
		http_response_code('400');
		echo "Error 400";
		exit;
	}

	public static function badRequest401(){
		http_response_code('401');
		echo "Error 401";
		exit;
	}

	public static function badRequest402(){
		http_response_code('402');
		echo "Error 402";
		exit;
	}

	public static function badRequest403(){
		http_response_code('403');
		echo "Error 403";
		exit;
	}

	public static function badRequest404(){
		http_response_code('404');

		$controllerFile = "../app/controllers/_404.php";
		require $controllerFile;

		$controller = new _404;
		$controller->index();

		exit;
	}

	public static function badRequest405(){
		http_response_code('405');
		echo "Error 405";

		exit;
	}

	public static function classError($controller){
		echo "Could not find the specificed class: " . $controller;
	}

	public static function methodError($controller, $method){
		echo "Could not find the specificed method: " . $method . " for class: " . $controller . ". Please check your routes.";
	}
}