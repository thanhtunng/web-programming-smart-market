<?php

namespace Core;

abstract class Model {
    protected static function getDB() {
        static $db = null;
        if ($db === null) {
            $host = 'mysql8-db:3306';
            $dbname = 'smartstore';
            $username = 'smartstore';
            $password = 'smartstore';
    
            try {
                $db = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                              $username, $password);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $db;
    }
}