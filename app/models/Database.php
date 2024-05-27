<?php
  namespace App\Models;

  use PDO, PDOException;
  
  class Database {
    private $host = 'php-mvc-db';
    private $dbname = 'app_db';
    private $username = 'root';
    private $password = 'root_password';
  
    protected $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql) {
      return $this->pdo->query($sql);
    }

    public function disconect() {
      $this->pdo = null;
    }

    public function migrateTable() {
      if ($this->pdo) {
        try {
          $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS users (
              id INT(10) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
              user_name VARCHAR(50) NOT NULL,
              password VARCHAR(50) NOT NULL,
              phone VARCHAR(10),
              email VARCHAR(50) NOT NULL,
              address VARCHAR(50)
            )"
          );

          $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS books (
              id INT(10) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
              title VARCHAR(50) NOT NULL,
              image VARCHAR(255),
              description VARCHAR(255),
              author_id CHAR(36)
            )"
          );

          $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS authors (
              id INT(10) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
              name VARCHAR(30) NOT NULL,
              image VARCHAR(255),
              description VARCHAR(255)
            )"
          );

        } catch (PDOException $e) {
          die("Connection failed: " . $e->getMessage());
        }

        return true;
      }
    }
  }
?>