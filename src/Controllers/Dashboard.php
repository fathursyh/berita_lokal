<?php 

namespace App\Controllers;

use App\Core\Controller;

class Dashboard extends Controller {

  public function index() {
    $data['title'] = 'Dashboard';
    $data['posts'] = $this->model('Posts_model')->getPostsFromUser($_SESSION['id_penulis']);
    $this->view('dashboard/index', $data);
    $this->view('template/footer');
  }

  public function publish($id, $is_published) {
    if($this->model('Posts_model')->publishPost($id, $is_published) > 0) {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    } else {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    }
  }
  public function tambah() {
    $data['title'] = 'Dashboard';
    $data['kategori'] = $this->model('Posts_model')->getCategory();
    $this->view('dashboard/tambah', $data);
    $this->view('template/footer');
  }

  public function edit($id) {
    $data['title'] = 'Dashboard';
    $data['kategori'] = $this->model('Posts_model')->getCategory();
    $data['post'] = $this->model('Posts_model')->getPost($id);
    $this->view('dashboard/edit', $data);
    $this->view('template/footer');
  }

  public function create() {
    if($this->model('Posts_model')->insertPost($_POST, $_FILES) > 0) {
      $this->model('Upload')->saveImage($_FILES, $_POST);
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    } else {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    }
  }

  public function alter() {
    if($this->model('Posts_model')->editPost($_POST) > 0) {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    } else {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    }
  }

  public function delete($id) {
    if($this->model('Posts_model')->deletePost($id) > 0) {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    } else {
      header('Location: ' . DIREKTORI . '/dashboard/index');
      exit;
    }
  }
}