<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title'] ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cambo&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      text-decoration: none;
      scroll-behavior: smooth;
    }
    a {
      text-decoration: none !important;
    }
    a:visited {
      color: inherit;
    }

    nav {
      font-family: cambo !important;
      max-width: 100vw;
      height: 16dvh;
      background-color: #4b71fd;
      padding: 12px 14px;
      box-shadow: 0px 3px 5px #33478e;
      z-index: 100;
    }

    .navb {
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

    main {
      background-color: #E9EEFC;
      display: flex;
      flex-flow: column nowrap;
      gap: 10px;
    }

    #headline {
      background-color: rgb(36, 36, 155);
      height: 20rem;
      overflow: hidden;
    }

    #main-content {
      display: grid;
      grid-template-rows: 3fr max-content;
      row-gap: 10px;
    }

    #news {
      background-color: #4b71fd;
      display: flex;
      flex-flow: row wrap;
      gap: 1rem;
      align-items: center;
      justify-content: center;
      max-height: 25rem;
      overflow-y: auto;
      overflow-x: hidden;
      min-height: 25rem;
    }

    .card {
      background-color: rgb(210, 210, 210);
      display: flex;
      flex-flow: column nowrap;
      width: 120px;
      height: 150px;
      transition: all 0.5s ease-in-out;
      position: relative;
    }

    .card-img {
      background-color: blue;
      height: 65%;
      overflow: hidden;
      object-fit: cover;
      object-position: center;
    }

    .card-text {
      display: flex;
      flex-flow: column nowrap;
      text-align: center;
      padding: 0.5rem;
    }

    .card:hover,
    .card:active {
      transform: scale(1.5);
    }

    #ads {
      height: 10rem;
      background-color: white;
      overflow: hidden;
    }

    #ads img {
      object-fit: cover;
      object-position: center;
      width: 120%;
      height: 100%;
    }

    aside {
      display: grid;
      max-height: fit-content;
      grid-template-rows: 1fr 1fr;
      row-gap: 10px;
      grid-template-columns: none;
      column-gap: 0;
    }

    #trending,
    #random {
      padding: 1.5rem 2rem;
      font-size: 1.2rem;
      color: white;
      background: linear-gradient(90deg, rgba(20, 159, 224, 1) 0%, rgba(103, 131, 234, 1) 100%);

    }

    #trending li,
    #random li {
      list-style-type: square;
      border-bottom: 1px solid white;
      margin-bottom: 10px;
      padding-bottom: 0.5rem;
    }

    footer {
      color: white;
      font-family: combi;
      display: flex;
      flex-flow: row nowrap;
      justify-content: space-evenly;
      gap: 1rem;
      padding: 2rem 3rem;
      margin-top: 20px;
      height: 8rem;
      background: linear-gradient(90deg, rgba(20, 159, 224, 1) 0%, rgba(103, 131, 234, 1) 100%);
    }

    #media-social {
      text-align: center;
    }

    #social-images {
      transform: scale(0.8);
    }

    .flasher {
      position: fixed !important;
      bottom: 0;
      right: 0;
      width: 20%;
      margin-right: 2%;
      margin-bottom: 2%;
    }

    .form-control {
      width: 100% !important;
      height: 7dvh !important;
    }

    .submitMasuk {
      border-radius: 8px;
      background: linear-gradient(0deg, rgba(58, 50, 182, 1) 14%, rgba(0, 198, 255, 1) 93%);
      box-shadow: inset 1px 1px 4px white;
      background-color: white;
      margin-top: 1rem;
      padding: 15px 40px;
      border: 0;
      color: white;
      font-weight: bold;
      transition-duration: 0.5s;
    }

    .submitMasuk:hover {
      transform: scale(1.2);
    }

    .submitMasuk:focus {
      transform: scale(0.8);
    }

    .showPassword {
      position: absolute;
      right: 2dvh;
      bottom: 2.3dvh;
    }

    #errorLogin {
      font-weight: bolder;
      color: red;
    }

    .hideContent {
      opacity: 0;
      display: none;
    }

    .backButton {
      text-shadow: -1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, 1px 1px 0 #ffffff;
    }

    #successPage {
      transition: all 1s ease;
      animation-name: fadeIn;
      animation: all 1s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @media screen and (max-width: 1366px) {
      .backButton {
        color: rgb(13, 128, 13);
        color: rgb(234, 234, 234);
      }
    }

    @media (min-width: 800px) {
      .navigations {
        font-size: 1.2rem;
      }

      #headline {
        height: 30rem;
      }

      #main-content {
        padding: 0 2rem;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-template-rows: none;
        column-gap: 1rem;
        row-gap: 0;
      }

      #news {
        max-height: 45rem;
        min-height: 40rem;
      }

      .card {
        width: 170px;
        height: 200px;
      }

      aside {
        display: grid;
        max-height: fit-content;
        grid-template-rows: 1fr 1fr;
        row-gap: 10px;
        grid-template-columns: none;
        column-gap: 0;
      }

      #trending,
      #random {
        padding: 3rem;
      }

      #ads {
        height: 20rem;
      }

      #ads img {
        width: 100%;
      }
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var splide = new Splide('.splide');
      splide.mount();
    });
  </script>
</head>

<body>
  <nav>
    <div class="navb" style="font-family: combi;">
      <div class="navbar-content">
        <h2 style="font-weight:bold; font-size: x-large;"><a href="<?= DIREKTORI ?>">Fokus Unpak</a></h2>
        <div class="auth">
          <a href="">Search</a>
          <a href="<?= DIREKTORI . '/login' ?>">Login</a>
        </div>
      </div>
      <ul class="navigations">
        <li><a href="<?= DIREKTORI ?>">Home</a></li>
        <li><a href="<?= DIREKTORI . '/kategori' ?>">Category</a></li>
        <li><a href="<?= DIREKTORI . '/dashboard' ?>">Dashboard</a></li>
      </ul>
    </div>
  </nav>