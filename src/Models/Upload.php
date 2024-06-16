<?php

namespace App\Models;

use App\Core\Database;

class Upload
{
  private $db;
  private $uploadOk = 1;
  
  public function __construct() {
    $this->db = new Database();
  }
  
  
  public function saveImage($data, $post)
  {
      $targetDir =  IMAGEDIR . $post['id_penulis'] . '_' . $data['image']['name'];
      $targetFile = $targetDir . basename($data["image"]["name"]);
      $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (isset($_POST)) {
      $check = getimagesize($data["image"]["tmp_name"]);
      if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $this->uploadOk = 1;
      } else {
        echo "File is not an image.";
        $this->uploadOk = 0;
      }
    }


    // Allow only specific image formats (e.g., JPG, PNG, GIF)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
      $this->uploadOk = 0;
    }

    // Move the uploaded file to the target directory
    if ($this->uploadOk == 1) {
      move_uploaded_file($data["image"]["tmp_name"], $targetDir);
    }
  }
}
