<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= DIREKTORI . '/css/bootstrap.css' ?>">
  <link rel="stylesheet" href="<?= DIREKTORI . '/css/style.css?v-' . time(); ?>">
  <link rel="icon" href="<?= DIREKTORI . '/assets/calendar.png' ?>" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
  <title><?= $data['title'] ?></title>
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    footer {
      width: 100dvw !important;
      margin: 0 !important;
      position: fixed !important;
      ;
      bottom: 0;
      color: rgba(0, 0, 0, 0.526) !important;
      ;
    }

    table {
      table-layout: fixed !important;
    }

    .tambah {
      transition: all 0.5s ease;
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 50px;
      right: 60px;
      background: linear-gradient(to bottom, var(--biru), var(--biru1));
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      box-shadow: 2px 2px 3px #999;
    }

    .tambah:hover {
      transform: scale(1.3);
    }

    .trix-button--icon-attach,
    .trix-button-group--file-tools {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container vh-100 mx-0 mt-0 ps-0">
    <div class="row vh-100">
      <div class="col-3 d-block d-md-flex">
        <div class="sidebar px-4 py-5">
          <div id="logo">
            <a href="<?= DIREKTORI ?>" class="text-decoration-none">
              <h3>FokusUnpak</h3>
            </a>
          </div>
          <div id="user" class="d-flex flex-row gap-3 justify-content-center align-items-center">
            <img src="<?= DIREKTORI . '/assets/cat.avif' ?>" alt="" width="100" height="100" style="border-radius: 50%; object-fit: cover; object-position: center;">
            <div class="kategori">
              <h4 class="fw-bold fs-5 text-light"><?= $_SESSION['username']?></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-9 p-5">
        <form action="<?= DIREKTORI . '/dashboard/alter'?>" method="post">
        <input type="hidden" name="id_post" value="<?= $data['post']['id_post'] ?>" id="id_post">
        <input type="hidden" name="id_penulis" value="1" id="id_penulis">
          <div class="mb-3" style="width: 60%;">
            <label for="title" class="form-label">Judul Post</label>
            <input type="text" class="form-control" id="title" name="title" required value="<?= $data['post']['judul_post'] ?>">
          </div>
          <div class="mb-3" style="width: 60%;">
            <label for="category" class="form-label">Kategori</label>
            <select name="id_kategori" id="id_kategori" class="form-select" required>
              <option disabled value="">-- Pilih Kategori --</option>
              <?php foreach ($data['kategori'] as $item) : ?>
                <option value="<?= $item['id_kategori'] ?>" <?php if($item['id_kategori'] == $data['post']['id_kategori']) {echo 'selected';} ?>><?= $item['nama_kategori'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3" style="width: 100%;">
          <input id="isi_post" type="hidden" name="isi_post" value="<?= $data['post']['isi_post'] ?>">
          <trix-editor input="isi_post"></trix-editor>
          </div>
          <button type="submit" class="btn" style="background: linear-gradient(to bottom, var(--biru), var(--biru1)); color: white;">Save Now</button>
          <a class="btn btn-danger" href="<?= DIREKTORI . '/dashboard' ?>">Cancel</a>
        </form>
      </div>
    </div>
  </div>
