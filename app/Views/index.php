<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<body>
  <!-- Hero -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">

        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          
          <h1>Kereta Api Indonesia</h1>
          <h2>Menghadirkan layanan transportasi kereta api yang terintegrasi untuk mobilitas yang berkualitas.</h2>

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?= base_url('Jadwal/kereta')?>" class="btn-get-started scrollto">Lihat Jadwal</a>
          </div>
          
        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/templates/assets/img/hero-img.png" class="img-fluid animated" alt="Hero Image"> 
        </div>

      </div>

  </section>

  <main id="main">

    <!-- Tentang Kami -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">

          <div class="col-lg-6">
            <p style="text-align: justify;">Maksud dan Tujuan perusahaan yaitu untuk melakukan usaha di bidang transportasi pada umumnya, khususnya dibidang perkeretaapian dengan menyediakan barang atau jasa yang bermutu tinggi dan berdaya saing kuat yang meliputi usaha pengangkutan orang dengan kereta api dan usaha non angkutan penumpang dengan menerapkan prinsip-prinsip Perseroan Terbatas.</p>
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0">
            <p style="text-align: justify;">Kami percaya bahwa tim kami merupakan aset paling berharga untuk menjalankan bisnis dengan baik dan produktif. Tentunya industri transportasi membutuhkan insan yang menjunjung tinggi nilai akhlak untuk menciptakan ekosistem bisnis yang baik guna menghadirkan pelayanan mumpuni bagi semua elemen masyarakat pengguna Kereta Api di Indonesia.</p>
          </div>

        </div>

      </div>
    </section>

    <!-- Visi & Misi -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">

            <div class="content">
              <h3><strong>Meningkatkan Kualitas Fasilitas</strong></h3>
              <p style="text-align: justify;">Untuk menjaga keamanan dan kenyamanan, LA Train terus berupaya memberikan fasilitas terbaik. Kini tiap stasiun terdapat berbagai macam fasilitas seperti toilet yang higienis, tempat makan, posko keamanan, dan lain sebagainya.</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed" style="text-align: center; font-size: 28px;"><strong>Visi LA Train</strong><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p style="text-align: center;">Menjadi solusi ekosistem transportasi urban terbaik di Indonesia.</p>
                  </div>
                </li>

                <li class="mt-5">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed" style="text-align: center; font-size: 28px;"><strong>Misi LA Train</strong><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <ul style="text-align: justify;">
                      <li><span>1</span>Menyediakan transportasi urban yang mengutamakan keselamatan, keamanan dan efisiensi dengan berbasis digital serta berwawasan lingkungan.</li>
                      <li><span>2</span>Mengembangkan solusi transportasi urban yang terintegrasi melalui investasi sumber daya manusia, teknologi dan operasi serta pemeliharaan.</li>
                      <li><span>3</span>Memajukan dan menginisiasi pengembangan transportasi urban untuk Indonesia melalui kolaborasi dengan pemangku kepentingan.</li>
                    </ul>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("/templates/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>

    <!-- Layanan -->
    <!-- <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p style="text-align: center;">Menghadirkan layanan berkualitas untuk meningkatkan keamanan, kenyamanan, dan keselamatan rekan commuters.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-taxi"></i></div>
              <h4>Taxi</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-phone"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- Galeri -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Kereta</li>
          <li data-filter=".filter-card">Suasana</li>
          <li data-filter=".filter-web">Karyawan</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/kai_1.jpg" class="img-fluid" alt="Kereta Commuter"></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/karyawan_1.jpg" class="img-fluid" alt="Suasana Stasiun"></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/kai_2.png" class="img-fluid" alt="Kereta Commuter 2"></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/suasana_1.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/karyawan_2.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/kai_3.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/suasana_2.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/suasana_3.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="/templates/assets/img/portfolio/karyawan_3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="/templates/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row">

          <!-- <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div> -->

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>


      </div>
    </section>

  </main>
</body>
<?= $this->endSection() ?>

</html>