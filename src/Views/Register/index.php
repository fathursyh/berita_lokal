<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container-fluid vh-100">
    <a href="home">
        <img src="<?= DIREKTORI . '/image/zakat 1.png' ?>" alt="" style="position: fixed; width: 4rem; margin-left: 2%; margin-top: 2%;">
    </a>
    <div class="row d-flex justify-content-center align-items-center vh-100" style="background-image: url('<?= DIREKTORI . '/image/bg1.png' ?>'); background-position: center; background-size: cover;">
        <div class="col-10 col-sm-6 w-70 h-75 d-flex justify-content-center align-items-center flex-column" style="background-color: rgba(255, 255, 255, 0.842);">
            <h2 class="mb-5 fs-4 fw-bold" style="font-family: Outfit; color: #0F9FE3;">Selamat Datang</h2>
            <div class="col-9 col-sm-5">
                <form action="register/newUser" method="post">
                    <div class="mb-3 formLogin">
                        <input type="email" class="form-control <?= isset($_SESSION['failed']) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Masukan email" style="font-size: 1.8vh;" required autofocus value="<?= $_SESSION['failedUser']['email'] ?? ''?>" onfocus="<?= isset($_SESSION['failed'])? 'moveCursorToEnd(this)' : '' ?>">
                    </div>
                    <div class="mb-3 formLogin">
                        <input type="text" class="form-control <?= isset($_SESSION['failed']) ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Masukan nama" style="font-size: 1.8vh;" required onfocus="<?= isset($_SESSION['failed'])? 'moveCursorToEnd(this)' : '' ?>" autocomplete="off" value="<?= $_SESSION['failedUser']['nama'] ?? ''?>">
                    </div>

                    <div class="mb-3 formLogin position-relative">
                        <input type="text" class="form-control <?= isset($_SESSION['failed']) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Masukan password" style="font-size: 1.8vh;" required maxlength="50" autocomplete="off">
                    </div>
                    <p id="errorLogin" class="text-center mt-1 hideContent">REGISTER TIDAK BERHASIL</p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="submitMasuk">Daftar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>