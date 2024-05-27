<?php
  require_once __DIR__ . '/../vendor/autoload.php';

  use App\Models\Database;
  use App\Controllers\BookController;

  class App {

    private $db;

    public function __construct()
    {
      $this->db = new Database();
      $this->db->migrateTable();
      $this->db->disconect();

      echo("init success");
    }
    
    public static function action() {

      echo(__DIR__);

      $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $segments = explode('/', $path);
      
      echo($path);
      
      echo($segments);
    }
  }

  $app = new App();

  $app::action();
  // $book = new BookController();

  // $book->create();