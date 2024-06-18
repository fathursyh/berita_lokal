<?php

namespace App\Controllers;

use App\Core\Controller;

class Posts extends Controller {
  public function kategori() {
    $data['umum'] = $this->model('Posts_model')->getCategoryById(1);
    $data['ukm'] = $this->model('Posts_model')->getCategoryById(2);
    $data['kemahasiswaan'] = $this->model('Posts_model')->getCategoryById(3);
    $data['dkm'] = $this->model('Posts_model')->getCategoryById(4);
    $this->view('posts/kategori', $data);
    $this->view('template/footer');
  }
  public function detail($id) {
    $data['berita'] = $this->model('Posts_model')->getPost($id);
    $this->model('Posts_model')->incViews($id);
    $this->view("posts/detail", $data);
    $this->view('template/footer');
  }
  
  public function search() {
    $data = $_POST['search'];
    // echo json_encode($data);
    $search = $this->model('Posts_model')->searchPosts($data);
    echo json_encode($search);
  }
}