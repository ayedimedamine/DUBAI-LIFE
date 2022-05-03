<?php
require_once('vendor/autoload.php');
require 'config/config.php';

class Database
{

	static function connection()
	{
		$charset = 'utf8';
		global $DB_HOST, $DB_DATABASE, $DB_USERNAME, $DB_PASSWORD;
		$dsn = "mysql:host={$DB_HOST};dbname={$DB_DATABASE};charset={$charset}";
		try {
			$conn = new \PDO($dsn, $DB_USERNAME, $DB_PASSWORD);
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