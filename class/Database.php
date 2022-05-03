<?php

require 'config/config.php';

class Database
{

	static function connection()
	{
		global $DB_HOST, $DB_DATABASE, $DB_USERNAME, $DB_PASSWORD;
		try {
			$conn = new \PDO("mysql:host=" . $DB_HOST . ";dbname=". $DB_DATABASE , $DB_USERNAME, $DB_PASSWORD);
	        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			echo $e->getMessage();
			http_response_code(400);
  			exit();
			 $conn = null;
		}
			return $conn;
	}
}