<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASS;
  private $database = DB_NAME;

  public $dbh;
  public $statement;

  public function __construct() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;

    $option = [
      PDO::ATTR_PERSISTENT => false,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->password, $option);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }

  public function query($query) {
    $this->statement = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = NULL) {
    if(is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value) :
          $type = PDO::PARAM_NULL;
        default :
        $type = PDO::PARAM_STR;
      }
    }
    $this->statement->bindValue($param, $value, $type);
  }

  public function execute() {
    $this->statement->execute();
  }

  public function resultSet() {
    $this->execute();
    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function single() {
    $this->execute();
    return $this->statement->fetch(PDO::FETCH_ASSOC);
  }

  public function rowCount() {
    return $this->statement->rowCount();
  }
}