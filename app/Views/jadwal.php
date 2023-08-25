  <?= $this->include('layout/head'); ?>

<body>
  <!-- NavBar -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url('Home/index')?>">LA Train</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('Home/index')?>">Beranda</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <!-- Hero -->
  <section id="hero" class="d-flex align-items-center" style="height: 70vh;">

    <div class="container">
      <div class="row">

        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          
          <h1>Jadwal Kereta</h1>

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#jadwal" class="btn-get-started scrollto">Lihat Jadwal</a>
          </div>
          
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/templates/assets/img/hero-img.png" class="img-fluid animated" alt="Hero Image">
        </div>

      </div>
    </div>

  </section>

  <!-- Jadwal Kereta -->
  <section id="jadwal" class="d-flex align-content-center">
    <div class="container mt-3">
        <div class="row justify-content-center">

            <div class="col-4">
                <select id="destination" class="form-select" aria-label="Destinasi Stasiun">
                    <option selected>Pilih Destinasi Stasiun</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Cilebut">Cilebut</option>
                    <option value="Manggarai">Manggarai</option>
                    <option value="Jakarta Kota">Jakarta Kota</option>
                </select>
            </div>

            <div class="col-2">
                <button class="btn btn-primary" value="pilih" onclick="fetchData()">Pilih</button>
            </div>

            <div id="data-container"></div>

        </div>
    </div>
</section>

  <?= $this->include('layout/footer'); ?>

  <?= $this->include('layout/foot'); ?>
</body>
<script>
  function fetchData() {
        var selectedDestination = document.getElementById('destination').value;
        var url = "<?php echo base_url('jadwal/fetchData'); ?>";

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'destination=' + selectedDestination
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Error: ' + response.status);
            }
        })
        .then(data => {
            showData(data);
        })
        .catch(error => {
            console.error(error);
        });
    }

    function showData(data) {
      var container = document.getElementById('data-container');
      container.innerHTML = '';

      if (data.length > 0) {
        var table = document.createElement('table');
        table.classList.add('table', 'table-striped', 'my-table');

        var thead = document.createElement('thead');
        var trHead = document.createElement('tr');

        var th1 = document.createElement('th');
        th1.textContent = 'kode_kereta';

        var th2 = document.createElement('th');
        th2.textContent = 'stasiun_awal';

        var th3 = document.createElement('th');
        th3.textContent = 'destinasi_stasiun';

        var th4 = document.createElement('th');
        th4.textContent = 'jam_berangkat';

        var th5 = document.createElement('th');
        th5.textContent = 'jam_tiba';

        trHead.appendChild(th1);
        trHead.appendChild(th2);
        trHead.appendChild(th3);
        trHead.appendChild(th4);
        trHead.appendChild(th5);
        thead.appendChild(trHead);
        table.appendChild(thead);

        var tbody = document.createElement('tbody');

        data.forEach(function(item) {
            var tr = document.createElement('tr');

            var td1 = document.createElement('td');
            td1.textContent = item.kode_kereta;

            var td2 = document.createElement('td');
            td2.textContent = item.stasiun_awal;

            var td3 = document.createElement('td');
            td3.textContent = item.destinasi_stasiun;

            var td4 = document.createElement('td');
            td4.textContent = item.jam_berangkat;

            var td5 = document.createElement('td');
            td5.textContent = item.jam_tiba;

            
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(td5);
            tbody.appendChild(tr);
        });

        table.appendChild(tbody);
        container.appendChild(table);
      } else {
        container.textContent = 'No data available for the selected destination.';
    }
}
</script>