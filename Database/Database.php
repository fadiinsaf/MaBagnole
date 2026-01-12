<?php 

class Database
{
    private static ?PDO $connection = NULL;
    private static string $dbname = "MaBagnole";
    private static string $host = "127.0.0.1";
    private static string $user = "fadi";
    private static string $password = "fadiinsaf";

    private function __construct(){}
    private function __clone(){}

    public static function getConnection(): PDO
    {
        if(self::$connection === NULL)
        {
            try{
                self::$connection = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8mb4", self::$user, self::$password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            }
            catch(PDOException $e)
            {
                die("Database Error: " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}