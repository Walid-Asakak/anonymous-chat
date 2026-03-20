<?php

namespace Services;
use PDO;

class Database {
    private string $host = 'db.3wa.io';
    private string $dbname = 'walidasakak_anonymous_chat';
    private string $username = 'walidasakak';
    private string $password = '11069fbca0a4e3afa84c127a191507e0';
    private ?PDO $pdo = null;
    
    public function __construct() {
        try {
            $this -> pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this -> username,
                $this -> password
            );
            
            $this -> pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            die('Erreur de connexion ' . $e -> getMessage());
        }
    }
    
    public function getConnectionDb(): PDO {
        return $this -> pdo;
    }
}

// Test the connection to the database : 
// $db = new Database();
// var_dump($db -> getConnectionDb());