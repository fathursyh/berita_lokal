<footer class="container-fluid text-center">
    <p><strong>&#9400;<?= date('Y', strtotime('today')); ?></strong> FokusUnpak - Made with love! &#10084; by Kelompok Berita</p>
</footer>

<script src="<?= DIREKTORI . '/js/app.js' ?>"></script>
<script>
    const search = document.querySelector('.searchbox');
    function showSearch() {
    search.classList.toggle('show');
    document.getElementById('search').focus();
  }
  search.addEventListener('keydown', function (event) {
      if (event.keyCode == 27){
        search.classList.add('show');
      }
  });
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e){
      e.preventDefault();
    })
    const input = document.querySelector('#search');
    input.addEventListener('input', async()=>{
      const searchResult = document.getElementById('listSearch').innerHTML = '';
      fetch('<?= DIREKTORI . '/posts/search' ?>', {
        method: 'POST',
        mode: 'cors',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
          'search' : input.value
        }),
      }).then((res)=>{return res.json()}).then((data)=>{
        if(input.value != '') {
          data.forEach(post=>{
            insertList(post.judul_post, post.id_post);
          })
        }
      }).catch((err)=>{console.log(err)});
    });
    function insertList(body, id) {
      const searchResult = document.getElementById('listSearch');
      const data = `
        <li><a href="<?= DIREKTORI . '/posts/detail/' ?>${id}">${body}</a></li>
      `;
      searchResult.insertAdjacentHTML('afterbegin', data);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>