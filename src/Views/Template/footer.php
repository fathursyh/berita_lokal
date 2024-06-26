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
  window.addEventListener('keydown', function (event) {
      if (event.keyCode == 27){
        search.classList.add('show');
      }
  });
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
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>