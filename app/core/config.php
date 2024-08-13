<?php

$host = "app_host";

if($_SERVER['SERVER_NAME'] == "localhost"){
	// ROOT
	define('ROOT', 'http://localhost/');

	// DATABASE PARAMETERS
	define('DBNAME', 'db_starz');
	define('DBHOST', 'locahost');
	define('DBUSER', 'user');
	define('DBPASSWORD', 'password');
	define('DBDRIVER', '');
}
else if ($_SERVER['SERVER_NAME'] == $host){
	// ROOT
	define('ROOT', 'http://' . $host);

	// DATABASE PARAMETERS
	define('DBNAME', 'db_starz');
	define('DBHOST', 'locahost');
	define('DBUSER', 'user');
	define('DBPASSWORD', 'password');
	define('DBDRIVER', '');
}