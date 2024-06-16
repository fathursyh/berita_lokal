<?php

namespace App\Models;

use App\Core\Database;

class User_model {
  private $db;
  private $userLogin;

  public function __construct() {
    $this->db = new Database();
  }
  public function getUserFromId($id) {
    $this->db->query("SELECT id_penulis, nama_penulis, email FROM penulis_berita WHERE id_penulis = :id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function getUserFromEmail($email) {
    $this->db->query("SELECT * FROM penulis_berita WHERE email = :email");
    $this->db->bind('email', $email);
    return $this->db->single();
  }

  public function login($data) {
    $this->userLogin = $this->getUserFromEmail(filter_var($data['email'], FILTER_VALIDATE_EMAIL));
    if ($this->userLogin && password_verify($data['password'], $this->userLogin['password'])) {
      $_SESSION['username'] = $this->userLogin['nama_penulis'];
      $_SESSION['id_penulis'] = $this->userLogin['id_penulis'];
      return true;
    } else {
      return false;
    }
  }
  public function register($data) {
    $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
    $query = 'INSERT INTO penulis_berita (email, nama_penulis, password) VALUES
    (:email, :nama, :password)';
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}