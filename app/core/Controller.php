<?php

class Controller 
{
	public function view($name){
		$viewFile = "../app/views/" . $name . ".view.php";

		if(file_exists($viewFile)){
			require $viewFile;
		}
		else {
			$viewFile = "../app/views/404.view.php";
			require $viewFile;
		}
	}
}