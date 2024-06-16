<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User_model;

class Home extends Controller {
  
  public function index() {
    if(isset($_SESSION['id_penulis'])){
      $data['user'] = $this->model('User_model')->getUserFromId($_SESSION['id_penulis']);
    }
    $data['berita'] = $this->model('Posts_model')->getPosts();
    $this->view('home/index', $data);
  }
}