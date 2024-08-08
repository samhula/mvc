<?php

class Router
{
	public static function get($path = '', $info = ['']){
		if($_SERVER['REQUEST_METHOD'] != 'GET'){
			return false;
		}
		else {
			$URIExplode = explode("/", trim($_SERVER['REQUEST_URI']));
			if(!empty($URIExplode[4])){
				$URI = "/" . $URIExplode[3] . "/" . $URIExplode[4];
			}
			else {
				$URI = "/" . $URIExplode[3];
			}

			if($path === $URI){
				Router::loadController($info);
				exit();
			}
		}
	}

	public static function post($path = '', $controllerFile = ''){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			return "post function";
		}
	}

	public static function put($path = '', $controllerFile = ''){
		if($_SERVER['REQUEST_METHOD'] === 'PUT'){
			return "put method";
		}
	}

	public static function delete($path = '', $controllerFile = ''){
		if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
			return "delete method";
		}
	}

	public static function head($path = '', $controllerFile = ''){
		if($_SERVER['REQUEST_METHOD'] === 'HEAD'){
			return "head method";
		}
	}

	public static function loadController($info){
		$controllerFile = '../app/controllers/'.ucfirst($info[0]).'.php';

		if(file_exists($controllerFile)){
			require $controllerFile;

			$controller = new $info[0];

			if(!empty($info[1])){
				$method = $info[1];

				if(!method_exists($controller, $method)){
				ErrorHandler::methodError($info[0], $method);
				}
				else {
					call_user_func_array([$controller, $method], []);
				}
			}
		}
		else {
			ErrorHandler::classError($info[0]);
		}
	}
}