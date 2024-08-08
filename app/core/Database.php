<?php

class Database 
{
	private function connect($conn){
		$connection = new PDO();
		return $connection;
	}

	private static function query($query){

	}	
}