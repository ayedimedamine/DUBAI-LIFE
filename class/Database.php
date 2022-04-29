<?php

class Database
{

	static function connection()
	{
		try {
			$conn = new \PDO("mysql:host=sql11.freemysqlhosting.net;dbname=sql11489092", 'sql11489092', 'ipqqeJTbxz');
	        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			 $conn = null;
		}
			return $conn;
	}
}