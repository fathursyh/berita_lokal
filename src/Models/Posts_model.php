<?php 

namespace App\Models;

use App\Core\Database;

class Posts_model {
  private $db;
  
  public function __construct() {
    $this->db = new Database();
  }

  public function publishPost($id, $is_published) {
    
    $query = ($is_published > 0) ? 'UPDATE post_berita SET is_published = 0 WHERE id_post = :id' : 'UPDATE post_berita SET is_published = 1 WHERE id_post = :id';
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function getPosts() {
    $query = 'SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori';
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getPost($id) {
    $query = 'SELECT * FROM post_berita WHERE id_post = :id_post';
    $this->db->query($query);
    $this->db->bind('id_post', $id);
    return $this->db->single();
  }

  public function getCategory() {
    $query = 'SELECT * FROM kategori_berita';
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function insertPost($data) {
    $query = "INSERT INTO post_berita (id_penulis, id_kategori, judul_post, isi_post) VALUES
    (:id_penulis, :id_kategori, :judul, :isi)";
    $this->db->query($query);
    $this->db->bind('id_penulis', $data['id_penulis']);
    $this->db->bind('id_kategori', $data['id_kategori']);
    $this->db->bind('judul', $data['title']);
    $this->db->bind('isi', $data['isi_post']);

    $this->db->execute();

    return $this->db->rowCount();
}

  public function deletePost($id) {
    $query = "DELETE FROM post_berita WHERE id_post = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function editPost($data) {
    $query = "UPDATE post_berita SET id_kategori = :id_kategori, judul_post = :judul, isi_post = :isi WHERE id_post = :id_post";
    $this->db->query($query);
    $this->db->bind('id_post', $data['id_post']);
    $this->db->bind('id_kategori', $data['id_kategori']);
    $this->db->bind('judul', $data['title']);
    $this->db->bind('isi', $data['isi_post']);

    $this->db->execute();

    return $this->db->rowCount();
  }
}