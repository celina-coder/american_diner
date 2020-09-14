<?php


/* déclaration de la database */

class Database{

      
    private static $dbHost = "localhost";  
    private static $dbName = "restaurant";   
    private static $dbUser = "root";    
    private static $dbUserPassword = "";
    
    private static $cnx = null;


    public static function Connect()
    {

        try {
            self::$cnx = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
        } catch(PDOException $e) {
            die($e->getMessage());
        }

        return  self::$cnx;

    }


   public static function disconnect() {

       self::$cnx = null;
    }


}

// CODE ACCES ADMIN

// mail : lincecolin@gmail.com 
// mot de passe : celina


