<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
      position: relative;
    }

    .navbar {
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
      display: flex;
      flex-flow: column nowrap;
      gap: 10px;
    }

    #headline {
      height: 20rem;
      overflow: hidden;
    }

    #headline img {
      z-index: 1;
    }

    #headline-text {
      z-index: 120;
      position: absolute;
      color: white;
      font-size: 3dvh;
      top: 40%;
      margin-left: 1rem;
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
      background-color: white;
      display: flex;
      flex-flow: column nowrap;
      width: 120px;
      height: 150px;
      transition: all 0.5s ease-in-out;
      position: relative;
    }

    .card-img {
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
      z-index: 10;
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

    #slideLayer {
      position: absolute;
      z-index: 100;
      height: 100%;
      width: 100%;
      background-color: rgba(60, 60, 60, 0.635);
    }

    @media (min-width: 800px) {

      main {
        padding: 0 4rem;
      }

      .navigations {
        font-size: 1.2rem;
      }

      #headline {
        position: relative;
        height: 30rem;
      }

      #headline-text {
        position: absolute;
        color: white;
        font-size: 3rem;
        bottom: 50%;
        left: 10%;
      }

      #main-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-template-rows: none;
        column-gap: 1rem;
        row-gap: 0;
      }

      #news {
        max-height: 100%;
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
      var splide = new Splide('.splide', {
        type: 'loop',
        lazyLoad: true,
        pauseOnHover: true,
        autoplay: true,
        interval: 3000,
        height: 500,
      });
      splide.mount();
    });
  </script>
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
    <div class="navbar">
      <div class="navbar-content">
        <h2 style="font-weight:bold; font-size: x-large;"><a href="<?= DIREKTORI ?>">Fokus Unpak</a></h2>
        <div class="auth">
          <a onclick="showSearch()" style="cursor: pointer;">Search</a>
          <?php
          if (isset($data['user'])) {
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
    <section id="headline" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php foreach ($data['beritaPopuler'] as $post) : ?>
            <li class="splide__slide" style="cursor:pointer;" onclick="URL2Post(<?= $post['id_post'] ?>)">
              <p id="headline-text"><?= $post['judul_post'] ?></p>
              <div id="slideLayer"></div>
              <img src="<?= DIREKTORI . '/assets/news/' . $post['image'] ?>" alt="" height="100%" width="100%" style="object-fit:cover; object-position: center;">
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <section id="main-content">
      <article id="news">
        <?php 
        foreach ($data['berita'] as $post) : ?>
          <a class="card" href="<?= DIREKTORI . '/posts/detail/' . $post['id_post'] ?>">
            <div class="card-img">
              <img src="<?= DIREKTORI . '/assets/news/' . $post['image'] ?>" alt="" width="110%" height="100%">
            </div>
            <div class="card-text">
              <h4 style="font-size: small;"><?= mb_strimwidth($post['judul_post'], 0, 50, '...') ?></h4>
              <br>
              <?php
              $now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
              $later = new DateTime($post['tgl_dibuat'], new DateTimeZone('Asia/Jakarta'));
              $jam = $now->diff($later)->format('%h');
              $hari = $now->diff($later)->format('%d');
              ?>
              <p style="font-size: x-small; text-align: start; display: inline; color: black;"><?= ($hari > 0) ? '<strong>' . $hari . ' hari yang lalu</strong>' : (($jam == 0) ? '<strong> kurang dari sejam yang lalu </strong>' : '<strong>' . $jam . ' jam yang lalu</strong>') ?> </p>
            </div>
          </a>
        <?php endforeach; ?>
      </article>
      <aside>
        <div id="trending">
          <h3 style="text-align: center;">Trending News</h3>
          <br>
          <ul>
            <?php
            foreach ($data['beritaPopuler'] as $post) : ?>
              <li><a href="<?= DIREKTORI . "/posts/detail/" . $post['id_post'] ?>" style="color: white;"><?= $post['judul_post'] ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div id="random">
          <h3 style="text-align: center;">Random News</h3>
          <br>
          <ul>
            <?php
            shuffle($data['berita']);
            foreach (array_slice($data['berita'], 0, 4) as $post) :
            ?>
              <li><a href="<?= DIREKTORI . "/posts/detail/" . $post['id_post'] ?>" style="color: white;"><?= $post['judul_post'] ?></a></li>

            <?php
            endforeach;
            ?>
          </ul>
        </div>
      </aside>
    </section>
    <section id="ads">
      <img src="<?= DIREKTORI . '/assets/ads.svg' ?>" alt="">
    </section>
  </main>
  <footer>
    <h2 style="font-size: 1.5rem;">Fokus Unpak <br><span style="font-size: small;">&#169;2024 - Made by Kelompok Berita</span></h2>
    <div id="media-social">
      <h3>Find us on social media</h3>
      <div id="social-images">
        <img src="<?= DIREKTORI . '/assets/ig.png' ?>" alt="" width="60dvw">
        <img src="<?= DIREKTORI . '/assets/unpak.png' ?>" alt="" width="50dvw" style="position: relative; ">
      </div>
    </div>
    <div id="footer-cat">
      <h3 style="margin-bottom: 0.5rem;">Kategori</h3>
      <ul style="list-style-type: none; display: flex; flex-flow: column nowrap; gap: 0.2rem;">
        <li><a href="">Umum</a></li>
        <li><a href="">UKM</a></li>
        <li><a href="">Kemahasiswaan</a></li>
        <li><a href="">DKM</a></li>
      </ul>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script>
    <?php
    if (isset($_SESSION['alert'])) {
      $pesan = $_SESSION['alert'];
      unset($_SESSION['alert']);
      echo "alert('Kamu berhasil $pesan');";
    }
    ?>

    function URL2Post(id) {
      location.href = '<?= DIREKTORI . '/posts/detail/' ?>' + id;
    }

    const search = document.querySelector('.searchbox');
    function showSearch() {
      search.classList.toggle('show');
      document.getElementById('search').focus();
    }
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
      e.preventDefault();
    })
    function debounce(func, wait) {
      let timeout;
      return function executedFunction(...args) {
        const later = () => {
          clearTimeout(timeout);
          func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
      };
    };

// search delay
    const input = document.querySelector('#search');
    const debouncedSearch = debounce(function(event) {
        document.getElementById('listSearch').innerHTML = '';
          fetch('<?= DIREKTORI . '/posts/search' ?>', {
            method: 'POST',
            mode: 'cors',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
              'search': input.value
            }),
          }).then((res) => {
            return res.json()
          }).then((data) => {
            if (input.value != '') {
              data.forEach(post => {
                insertList(post.judul_post, post.id_post);
              })
            }
          }).catch((err) => {
            console.log(err)
          });
    }, 450);

    input.addEventListener('input', debouncedSearch);

    function insertList(body, id) {
      const searchResult = document.getElementById('listSearch');
      const data = `
        <li><a href="<?= DIREKTORI . '/posts/detail/' ?>${id}">${body}</a></li>
      `;
      searchResult.insertAdjacentHTML('afterbegin', data);
    };

    search.addEventListener('keydown', function (event) {
      if (event.keyCode == 27){
        search.classList.add('show');
      }
    });
  </script>
</body>

</html>