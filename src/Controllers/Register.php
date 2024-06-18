<?php

namespace App\Controllers;

use App\Core\Controller;


class Register extends Controller
{
    public function index()
    {
        $data['title'] = 'Register';
        $this->view('template/header', $data);
        $this->view('Register/index');
        $this->view('template/footer');
    }

    public function newUser()
    {
        $_SESSION['failedUser'] = [
            'email' => $_POST['email'],
            'nama' => $_POST['nama'],
            'password' => $_POST['password'],
        ];
        if ($this->model('User_model')->register($_POST) > 0) {
            $_SESSION['alert'] = 'mendaftar!';
            header('Location:' . DIREKTORI);
            exit();
        } else {
            $_SESSION['failed'] = true;
            header('Location:'. DIREKTORI . '/login');
            exit();
        }
    }
}
