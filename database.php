<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "closdela_burger_code";
    private static $dbUsername = "closdela_burger_code";
    private static $dbUserpassword = "M@zagan061186";
    
    private static $connection = null;
    
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
