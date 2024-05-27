<?php
namespace App\Models;

use App\Models\Database;

class BookModel {
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function create() {
    $sql = "INSERT INTO books (title, image, description, author_id) VALUES('Harry Potter', 'abc', 'Harry Potter', '1')";
    $data = $this->db->query($sql);

    return $data->fetch();
  }

  public function get() {
    $sql = "SELECT * FROM books";
  }

  
}