<?php
namespace App\Core;

class Search {

  public static $search = '';
  public static function getSearch() {
    self::$search = $_POST['search'];
    echo json_encode(self::$search);
  }
}