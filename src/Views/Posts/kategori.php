<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <link rel="stylesheet" href="<?= DIREKTORI . '/assets/css/reza/' ?>stylee.css">
    <script src="style/jquery.js"></script>
    <script src="style/bootstrap.min.js"></script>
    <style>
                * {
            margin: 0;
            padding: 0;
            text-decoration: none !important;
            scroll-behavior: smooth;
    }

    a:visited {
      color: inherit;
    }

    nav {
      font-family: cambo;
      max-width: 100vw;
      height: 16dvh;
      background-color: #4b71fd;
      padding: 12px 14px;
      box-shadow: 0px 3px 5px #33478e;
      z-index: 100;
    }

    .navbr {
      max-width: 100%;
      height: 100%;
      background-color: #4b71fd;
      display: flex;
      flex-flow: column nowrap;
      gap: 10px;
    }

    .navbar-content {
      padding: 10px 1.5rem;
      background-color: #447dfd;
      height: 50%;
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0px 2px 4px #3856c2;
      display: flex;
      flex-flow: row nowrap;
      align-items: center;
      color: white;
    }

    .auth {
      margin-left: auto;
      display: flex;
      flex-flow: row nowrap;
      gap: 1rem;
    }

    .navigations {
      margin: 10px 0;
      display: flex;
      flex-flow: row nowrap;
      list-style-type: none;
      gap: 3%;
      justify-content: center;
      font-size: 1rem;
      font-weight: bold;
      color: white;
    }

    .navigations li:hover {
      transform: scale(1.2);
    }
    </style>
</head>

<body>
<nav>
    <div class="navbr">
      <div class="navbar-content">
      <h2 style="font-weight:bold; font-size: x-large;"><a href="<?= DIREKTORI ?>">Fokus Unpak</a></h2>        <div class="auth">
          <a href="">Search</a>
          <?php
            if(isset($data['user'])) {
              echo "<a href=" . DIREKTORI . '/login/logout' . ">Logout</a>";
            } else {
              echo "<a href=" . DIREKTORI . '/login' . ">Login</a>";
            }
          ?>
        </div>
      </div>
      <ul class="navigations">
        <li><a href="<?= DIREKTORI ?>">Home</a></li>
        <li><a href="<?= DIREKTORI . '/posts/kategori' ?>">Category</a></li>
        <li><a href="<?= DIREKTORI . '/dashboard' ?>">Dashboard</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      <div class="card mt-5" style="margin-top: 20px; margin-bottom: 20px; margin-left: 80px; margin-right: 80px;">
          <div style="text-align: center; padding: auto; font-size: 30px;" class="card-header bg-primary">
              UMUM
          </div>
          <div class="card-body">
              <div class="container" style="overflow-x: auto;">
                  <div style="display: flex;">
                      <img src="assets/agk.jpg"
                          style="width: 400px; height: 500px; object-fit: cover; margin-right: 20px;" alt="UKM Image">
                  </div>
              </div>
          </div>
      </div>
      
        <div class="card mt-5" style="margin-top: 20px; margin-bottom: 20px; margin-left: 80px; margin-right: 80px;">
            <div style="text-align: center; padding: auto; font-size: 30px;" class="card-header bg-primary">
                UKM
            </div>
            <div class="card-body">
                <div class="container" style="overflow-x: auto;">
                    <div style="display: flex;">
                        <img src="assets/agk.jpg"
                            style="width: 400px; height: 500px; object-fit: cover; margin-right: 20px;" alt="UKM Image">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5" style="margin-top: 20px; margin-bottom: 20px; margin-left: 80px; margin-right: 80px;">
            <div style="text-align: center; padding: auto; font-size: 30px;" class="card-header bg-primary">
                Kemahasiswaan
            </div>
            <div class="card-body">
                <div class="container" style="overflow-x: auto;">
                    <div style="display: flex;">
                        <img src="assets/agk.jpg"
                            style="width: 400px; height: 500px; object-fit: cover; margin-right: 20px;" alt="UKM Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5" style="margin-top: 20px; margin-bottom: 20px; margin-left: 80px; margin-right: 80px;">
            <div style="text-align: center; padding: auto; font-size: 30px;" class="card-header bg-primary">
                DKM
            </div>
            <div class="card-body">
                <div class="container" style="overflow-x: auto;">
                    <div style="display: flex;">
                        <img src="assets/agk.jpg"
                            style="width: 400px; height: 500px; object-fit: cover; margin-right: 20px;" alt="UKM Image">
                    </div>
                </div>
            </div>
        </div>
</body>

<footer>
    <div class="container">
        <div class="row">
            <div>
                <h3 style="color: aliceblue;"><b>Fokus Unpak</b></h3>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <p><a href="" style="color: aliceblue">Kategori</a></p>
                        <p><a href="" style="color: aliceblue">UKM</a></p>
                        <p><a href="" style="color: aliceblue">DKM</a></p>
                        <p><a href="" style="color: aliceblue">Kemahasiswaan</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>