<?php

namespace App\Controllers;

use App\Core\Controller;

class Posts extends Controller {
  public function kategori() {
    $this->view('posts/kategori');
  }
  public function detail($id) {
    $data['berita'] = $this->model('Posts_model')->getPost($id);
    $this->view("posts/detail", $data);
  }
}