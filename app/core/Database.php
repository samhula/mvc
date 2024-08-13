<?php

class Database 
{
	private function connect($conn){
		$string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
		$connection = new PDO($string, DBUSER, DBPASSWORD);
		return $connection;
	}

	public static function query($query, $data = []){
		
	}	
}