<?php 

namespace App\Models;

use App\Core\Database;
use DateTime;

class Posts_model {
  private $db;
  
  public function __construct() {
    $this->db = new Database();
  }

  public function publishPost($id, $is_published) {
    $query = ($is_published > 0) ? 'UPDATE post_berita SET is_published = 0 WHERE id_post = :id' : 'UPDATE post_berita SET is_published = 1, tgl_publish = now() WHERE id_post = :id';
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function getPosts() {
    $query = "SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori AND post_berita.is_published = 1 ORDER BY post_berita.tgl_publish DESC LIMIT 30";
    $this->db->query($query);
    return $this->db->resultSet();
  }
  public function getPopularPosts() {
    $query = 'SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori AND post_berita.is_published = 1 ORDER BY post_berita.views DESC LIMIT 4';
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function getPost($id) {
    $query = 'SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori AND post_berita.id_post = :id_post';
    $this->db->query($query);
    $this->db->bind('id_post', $id);
    return $this->db->single();
  }
  public function incViews($id){
    $this->db->query('UPDATE post_berita SET views = views + 1 WHERE id_post = :id_post');
    $this->db->bind('id_post', $id);
    $this->db->execute();
  }

  public function searchPosts($data){
    $this->db->query("SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori AND post_berita.is_published = 1 AND post_berita.judul_post LIKE '%$data%' LIMIT 5");
    return $this->db->resultSet();
  }

  public function getPostsFromUser($userid) {
    $query = 'SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori AND id_penulis = :id_penulis';
    $this->db->query($query);
    $this->db->bind('id_penulis', $userid);
    return $this->db->resultSet();

  }

  public function getCategory() {
    $query = 'SELECT * FROM kategori_berita';
    $this->db->query($query);
    return $this->db->resultSet();
  }
  public function getCategoryById($id) {
    $query = 'SELECT post_berita.*, kategori_berita.nama_kategori FROM post_berita INNER JOIN kategori_berita WHERE post_berita.id_kategori = kategori_berita.id_kategori AND post_berita.id_kategori = :id AND post_berita.is_published = 1';
    $this->db->query($query);
    $this->db->bind('id', $id);
    return $this->db->resultSet();
  }

  public function insertPost($data, $file) {
  $targetFile = $data['id_penulis'] . '_' . str_replace(' ', '', $file['image']['name']);
    $query = "INSERT INTO post_berita (id_penulis, id_kategori, image,  judul_post, isi_post) VALUES
    (:id_penulis, :id_kategori, :image,  :judul, :isi)";
    $this->db->query($query);
    $this->db->bind('id_penulis', $data['id_penulis']);
    $this->db->bind('id_kategori', $data['id_kategori']);
    $this->db->bind('image', $targetFile );
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