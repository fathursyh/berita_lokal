<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= DIREKTORI . '/css/bootstrap.css' ?>">
  <link rel="stylesheet" href="<?= DIREKTORI . '/css/style.css' ?>">
  <title><?= $data['title'] ?></title>
  <link rel="icon" href="<?= DIREKTORI . '/assets/calendar.png' ?>" type="image/x-icon">
  <style>
    footer {
    width: 100dvw !important;
    margin: 0 !important;
    position: fixed !important;;
    bottom: 0;
    color: rgba(0, 0, 0, 0.526) !important;;
}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-lg-5 px-3 py-3 mb-4" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand ms-3" href="home"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
  <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
</svg></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto gap-3 me-4">
          <li class="nav-item">
            <a class="nav-link" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard"><?= $data['user'] ?></a>
          </li>
      </div>
  </nav>