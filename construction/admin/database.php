

<?php 
	
	
class Database
{
	private static $dbHost = "localhost";
	private static $dbName = "constructions";
	private static $dbUser = "root";
	private static $dbUserPassword = "";
	private static $connection = null;	
	private static $option =[
       PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
	];

	public static function connect()
	{
		try
		{
			self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser,self::$dbUserPassword, self::$option);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		return self::$connection;
			
	}
	public static function disconnect()
	{
		self::$connection = null;
	}
}

Database::connect();	
	

?>