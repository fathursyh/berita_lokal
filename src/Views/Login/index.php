<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container-fluid vh-100">
    <a href="home">
        <img src="<?= DIREKTORI . '/image/zakat 1.png' ?>" alt="" style="position: fixed; width: 4rem; margin-left: 2%; margin-top: 2%;">
    </a>
    <div class="row d-flex justify-content-center align-items-center vh-100" style="background-image: url('<?= DIREKTORI . '/image/bg1.png' ?>'); background-position: center; background-size: cover;">
        <div class="col-10 col-sm-6 w-70 h-75 d-flex justify-content-center align-items-center flex-column" style="background-color: rgba(255, 255, 255, 0.842);">
            <h2 class="mb-5 fs-4 fw-bold" style="font-family: Outfit; color: #0F9FE3;">Selamat Datang</h2>
            <div class="col-9 col-sm-5">
                <form action="login/verify" method="post">
                    <div class="mb-3 formLogin">
                        <input type="email" class="form-control <?= isset($_SESSION['failed']) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Masukan email" style="font-size: 1.8vh;" required autofocus value="<?= $_SESSION['failedUser']['email'] ?? ''?> " onfocus="<?= isset($_SESSION['failed'])? 'moveCursorToEnd(this)' : '' ?>">
                    </div>
                    <div class="mb-3 formLogin position-relative">
                        <input type="password" class="form-control <?= isset($_SESSION['failed']) ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Masukan password" style="font-size: 1.8vh;" required maxlength="50">
                        <span style="cursor: pointer; background-color: white;" class="showPassword"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                            </svg></span>
                    </div>
                    <p id="errorLogin" class="text-center mt-1 hideContent"> EMAIL ATAU PASSWORD ANDA SALAH!</p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="submitMasuk">Masuk</button>
                    </div>
                    <div class="text-center mt-3 fs-6">
                        <p style="font-family: Outfit, serif;">Belum punya akun? <a href="register" style="font-family: Outfit; color: Blue; font-weight: bold;">Daftar</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function showError() {
        document.getElementById('errorLogin').classList.remove('hideContent');
        setTimeout(function() {
            document.getElementById('errorLogin').classList.add('hideContent');
        }, 3000);
    }
    <?php
    if(isset($_SESSION['failed'])) {
        echo 'showError();';
        unset($_SESSION['failed']);
    }
    unset($_SESSION['failedUser']);
    ?>

function moveCursorToEnd(input) {
        const originalValue = input.value;
        input.value = ''; 
        input.value = originalValue;
}
</script>