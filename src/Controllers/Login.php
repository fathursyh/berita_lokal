<?php 
namespace App\Controllers;
use App\Core\Controller;

class Login extends Controller {

    public function index() {
      $data['title'] = 'Login';
      $this->view('template/header', $data);
      $this->view('login/index');
      $this->view('template/footer');
    }
    public function verify() {
      $_SESSION['failedUser'] = [
          'email' => $_POST['email'],
          'password'=> $_POST['password'],
      ];
      $this->model('User_model')->login($_POST);
     if ($this->model('User_model')->login($_POST)) {
        $_SESSION['alert'] = 'login!';
         header('Location:'. DIREKTORI . $_SESSION['lastC']);
         exit();
      } else {
          $_SESSION['failed'] = true;
          header('Location:'. DIREKTORI . '/login');
          exit();
      }
  }

  public function logout() {
      unset($_SESSION['username']);
      unset($_SESSION['id_penulis']);
      $_SESSION['alert'] = 'logout!';
      header('Location:'. DIREKTORI . '/home');
      exit();

  }
}