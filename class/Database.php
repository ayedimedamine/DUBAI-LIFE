<?php

class Database
{

	static function connection()
	{
		try {
			$conn = new \PDO("mysql:host=sql11.freemysqlhosting.net;dbname=sql11487395", 'sql11487395', 'kqljYbir6a');
	        $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\Exception $e) {
			 $conn = null;
		}
			return $conn;
	}
}