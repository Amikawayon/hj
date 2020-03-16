<?php

class Db
{
    
    public static function getConnection()
    {
      
       
  

        $dsn = "mysql:host=localhost;dbname=Solvintech";
        $db = new PDO($dsn, 'root', 'passIam!2020');
        $db->exec("set names utf8");
        
        return $db;
    }

}

