<?php

use App\Controllers\Dashboard;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= DIREKTORI . '/assets/css/reza/'?>stylee.css">
    <link rel="stylesheet" href="<?= DIREKTORI . '/assets/css/reza/'?>styleee.css">
    <script src="style/jquery.js"></script>
    <script src="style/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2ebff;
            margin: 0;
            padding: 0;
        }

        .navbar-nav-center {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .navbar-nav-center li {
            margin: 0 10px;
        }

        .navbar-collapse-center {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .card {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h2,
        .card h6,
        .card h4,
        .card p {
            margin-top: 0;
        }

        #hotnews {
          padding: 2rem 2rem;
        }


        .feature-image {
            width: 100%;
            height: auto;
            margin-bottom: 2rem;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile img {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        aside {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .card {
                max-width: 100%;
            }
        }
        * {
            margin: 0;
            padding: 0;
            text-decoration: none !important;
            scroll-behavior: smooth;
    }
    
    @media (min-width: 800px) {
          #hotnews {
            padding: 2rem 8rem;
          }
          .feature-image {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
          }
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
    .searchbox {
      width: 100%;
      min-height: 30%;
      z-index: 130;
      position: fixed;
      background-color: rgba(59, 53, 53, 0.879);
      backdrop-filter: blur(2px);
      color: white;
      transition: all 0.8s ease-in-out;
      padding: 1rem;
      text-wrap: wrap;
      left: 0;
      text-align: center;
    }

    .show {
      transform: translateY(-100%);
    }

    #search {
      border-radius: 5px;
      height: 20px;
      display: block;
      padding: 5px;
      margin-bottom: 10px;
      margin-left: auto;
      margin-right: auto;
    }

    #listSearch {
      display: inline-block;
      max-width: 80%;
      text-align: left;
      text-wrap: pretty;
    }

    </style>
</head>

<body>
<div class="searchbox show">
    <form action="<?= DIREKTORI ?>" method="post">
      <input type="text" id="search" placeholder="Search" name="search" autocomplete="off">
      <br>
      <ul style="list-style-type: square;" id="listSearch">
      </ul>
    </form>
  </div>
<nav>
    <div class="navbr">
      <div class="navbar-content">
      <h2 style="font-weight:bold; font-size: x-large;"><a href="<?= DIREKTORI ?>">Fokus Unpak</a></h2>        <div class="auth">
          <a onclick="showSearch()" style="cursor: pointer;">Search</a>
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

    <main>
        <div id="content" class="container">
            <article id="hotnews" class="card">
                <h3 style="color: gray"><?= $data['berita']['nama_kategori']?></h3>
                <h2><?=$data['berita']['judul_post']?></h2>
                <hr>
                <img src="<?= DIREKTORI. '/assets/news/' . $data['berita']['image'] ?>" class="feature-image" alt="ancika">
                <p><?= $data['berita']['isi_post']?></p>
            </article>
        </div>
    </main>