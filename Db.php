<?php

class Db
{
    
    public static function getConnection()
    {
      
       
  

        $dsn = "mysql:host=localhost;dbname=Solvintech";
        $db1 = new PDO($dsn, 'root', 'passIam!2020');
        $db1->exec("set names utf8");
        
        return $db1;
    }

}

