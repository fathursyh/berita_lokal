<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= DIREKTORI . '/css/bootstrap.css' ?>">
  <link rel="stylesheet" href="<?= DIREKTORI . '/css/style.css?v=' . time(); ?>">
  <link rel="icon" href="<?= DIREKTORI . '/assets/calendar.png' ?>" type="image/x-icon">
  <title><?= $data['title'] ?></title>
  <style>
    *{padding:0;margin:0;}

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
      position:fixed;
      width:60px;
      height:60px;
      bottom:50px;
      right:60px;
      background: linear-gradient(to bottom, var(--biru), var(--biru1));
      color:#FFF;
      border-radius:50px;
      text-align:center;
      box-shadow: 2px 2px 3px #999;
    }
    .tambah:hover {
      transform: scale(1.3);
    }
  </style>
</head>
<body>
  <div class="container vh-100 mx-0 mt-0 ps-0">
    <div class="row vh-100">
      <div class="col-3">
        <div class="sidebar px-4 py-5">
          <div id="logo">
            <a href="<?= DIREKTORI ?>" class="text-decoration-none">
              <h3>FokusUnpak</h3>
            </a>
          </div>

          <div id="user" class="d-flex flex-row gap-3 justify-content-center align-items-center">
            <img src="<?= DIREKTORI . '/assets/cat.avif' ?>" alt="" width="100" height="100" style="border-radius: 50%; object-fit: cover; object-position: center;">
            <div class="kategori">
              <h4 class="fw-bold fs-5"><?= $_SESSION['username']?? 'User' ?></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9 p-5">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="width: 5%;">No</th>
              <th scope="col" style="width: 38%;">Title</th>
              <th scope="col" style="width: 20%;">Category</th>
              <th scope="col" style="width: 10%;">Views</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php
            $i = 1;
            foreach (array_reverse($data['posts']) as $post) : ?>
              <tr>
                <th scope="row"><?= $i ?></th>
                  <td><a href="<?= DIREKTORI . '/posts/detail/' . $post['id_post'] ?>" class="text-decoration-none text-dark"><?= $post['judul_post'] ?></a></td>
                  <td><?= $post['nama_kategori'] ?></td>
                  <td><?= $post['views'] ?></td>
                  <td style="color:<?= ($post['is_published'] > 0)?  'green' : 'red'; ?>"><?= ($post['is_published'] > 0)? 'Published' : 'Draft' ?></td>
                <td>
                  <form action="<?= DIREKTORI . '/dashboard/publish/' . $post['id_post'] . '/' . $post['is_published'] ?>" method="post" class="d-inline">
                    <button class="badge bg-primary border-0" onclick="return confirm('<?= ($post['is_published'] > 0) ? 'Unpublish this post?' : 'Publish this post?' ?>')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                    </svg></button>
                  </form>
                  <a href="<?= DIREKTORI . '/dashboard/edit/' . $post['id_post'] ?>" class="badge bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                    </svg></a>
                  <form action="<?= DIREKTORI . '/dashboard/delete/' . $post['id_post'] ?>" method="post" class="d-inline">
                    <button class="badge bg-danger border-0" onclick="return confirm('Delete data?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                      </svg></button>
                  </form>
                  
              </tr>
              
            <?php $i++;
            endforeach; ?>
          </tbody>
        </table>
        <a class="tambah" href="<?= DIREKTORI . '/dashboard/tambah' ?>"><svg style="margin-top: 25%; cursor:pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
          </svg></a>
      </div>
    </div>
  </div>
