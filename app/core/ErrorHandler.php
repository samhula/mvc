<?php

class ErrorHandler
{
	public static function badRequest400(){
		echo "Error 400";
	}

	public static function badRequest401(){
		echo "Error 401";
	}

	public static function badRequest402(){
		echo "Error 402";
	}

	public static function badRequest403(){
		echo "Error 403";
	}

	public static function badRequest404(){
		$controllerFile = "../app/controllers/_404.php";
		require $controllerFile;

		$controller = new _404;
		$controller->index();
	}

	public static function classError($controller){
		echo "Could not find the specificed class: " . $controller;
	}

	public static function methodError($controller, $method){
		echo "Could not find the specificed method: " . $method . " for class: " . $controller . ". Please check your routes.";
	}
}