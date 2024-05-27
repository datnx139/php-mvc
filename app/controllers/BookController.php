<?php

  namespace App\Controllers;

  use App\Models\BookModel;

  class BookController {

    private $bookModel;

    public function __construct() {
      $this->bookModel = new BookModel();
    }

    public function create() {
      $book = $this->bookModel->create();

      require_once ("./views/books/index.php");
    }
  }