<?php

class Base {
	

	private static $dblink ;
	private static function connect()
	{
		$array = parse_ini_file('base.ini') ;
		try {

			$db = new PDO('mysql:host='.$array['host'].';
						   dbname='.$array['dbname'].';
						   charset=utf8',
						   $array['user'],
						   $array['pass'],
						   array(
						   PDO::ERRMODE_EXCEPTION  =>true, 
 						   PDO::ATTR_PERSISTENT	   =>true)) ; 

			} catch (PDOExecption $e) {
				 throw new PDOException("connection: 
				 		$dsn ".$e->getMessage(). '<br/>');			
			}	

		return $db ;

	} 



	public static function getConnection()
	{
		if(isset(self::$dblink)){
			return self::$dblink ;
		}else{
			self::$dblink = self::connect();
 			return self::$dblink ;
		}
	}



	
}