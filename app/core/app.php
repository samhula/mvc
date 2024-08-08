<?php

class App
{
	private function showURL($url){
		echo "<pre>";
		print_r($url);
		echo "</pre>";
	}

	private function getSplitURL(){
		$URL = $_GET['url'] ?? "home";
		$URL = explode("/", $URL);
		return $URL;
	}

	// public function loadController(){
	// 	// $controller = $this->getSplitURL();

	// 	// $controllerFile = "../app/controllers/" . ucfirst($controller[0]) . ".php";

	// 	// if(file_exists($controllerFile)){
	// 	// 	require $controllerFile;
	// 	// }
	// 	// else {
	// 	// 	$controllerFile = "../app/controllers/_404.php";
	// 	// 	require $controllerFile;
	// 	// }
	// }
}