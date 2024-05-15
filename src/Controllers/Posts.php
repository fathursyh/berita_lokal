<?php

namespace App\Controllers;

use App\Core\Controller;

class Posts extends Controller {
  public function index() {
    $data['title'] = 'Posts';
    $data['user'] = 'Username';
    $this->view('template/header', $data);
    $this->view('posts/index');
    $this->view('template/footer');
  }
}