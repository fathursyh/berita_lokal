<?php 

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller {
  
  public function index() {
    $data['title'] = 'Home';
    $data['user'] = 'Username';
    $this->view('template/header', $data);
    $this->view('home/index');
    $this->view('template/footer');
  }
}