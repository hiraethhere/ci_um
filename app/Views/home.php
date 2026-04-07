<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<main class="main">

  <section id="hero" class="hero section dark-background">
    <img src="<?= base_url('assets/img/hero-bg.jpg') ?>" alt="Kampus UM" data-aos="fade-in">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h1 data-aos="fade-up">The Learning University</h1>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Unggul dan Menjadi Rujukan dalam Inovasi Pembelajaran. Selamat datang di portal resmi Universitas Negeri Malang.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section id="recent-posts" class="recent-posts section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Berita & Artikel</h2>
      <p>Ikuti perkembangan terbaru dan informasi menarik dari lingkungan kampus UM</p>
    </div>

    <div class="container">
      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url('assets/img/blog/blog-1.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Sel, 7 April 2026</span>
              <span class="post-author"> / Humas UM</span>
            </div>
            <h3 class="post-title">UM Raih Peringkat Atas dalam Inovasi Pembelajaran Digital</h3>
            <p>Penghargaan ini menegaskan posisi UM sebagai kampus rujukan dalam pengembangan teknologi edukasi di Indonesia...</p>
            <a href="#" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url('assets/img/blog/blog-2.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Sen, 6 April 2026</span>
              <span class="post-author"> / Akademik</span>
            </div>
            <h3 class="post-title">Pembukaan Pendaftaran Mahasiswa Baru Jalur Mandiri 2026</h3>
            <p>Segera siapkan diri Anda untuk bergabung menjadi bagian dari keluarga besar The Learning University melalui jalur seleksi Mandiri...</p>
            <a href="#" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url('assets/img/blog/blog-3.jpg') ?>" class="img-fluid" alt=""></div>
            <div class="meta">
              <span class="post-date">Sab, 4 April 2026</span>
              <span class="post-author"> / Kemahasiswaan</span>
            </div>
            <h3 class="post-title">Mahasiswa Teknik UM Ciptakan Robot Pembersih Sungai Otomatis</h3>
            <p>Inovasi mahasiswa ini berhasil memenangkan kompetisi teknologi tingkat nasional dan akan diproduksi secara massal...</p>
            <a href="#" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section>

    <section id="call-to-action" class="call-to-action section dark-background">

    <img src="<?= base_url('assets/img/cta-bg.jpg') ?>" alt="Kampus UM">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Ingin Tahu Lebih Banyak Tentang UM?</h3>
            <p>Dapatkan informasi terkini mengenai kegiatan kampus, pengumuman akademik, dan prestasi civitas akademika Universitas Negeri Malang secara lengkap di portal berita kami.</p>
            <a class="cta-btn" href="<?= base_url('blog') ?>">Lihat Semua Berita</a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="why-us" class="why-us section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Prestasi & Akreditasi</h2>
        <p>Komitmen kami dalam menjaga kualitas pendidikan di tingkat dunia.</p>
      </div>

      <div class="row g-0">
        <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
          <img src="<?= base_url('assets/img/why-us-bg.jpg') ?>" alt="Prestasi UM">
        </div>

        <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                }
              }
            </script>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Akreditasi UNGGUL</h3>
                  <h4 class="mb-3">BAN-PT Indonesia</h4>
                  <p>Universitas Negeri Malang telah secara konsisten mempertahankan peringkat Akreditasi Unggul, membuktikan standar kualitas pendidikan yang kami berikan.</p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Top 400+ Dunia</h3>
                  <h4 class="mb-3">QS World University Rankings</h4>
                  <p>Diakui sebagai salah satu universitas terbaik di dunia dalam kategori inovasi pembelajaran dan kualitas riset yang berdampak luas.</p>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">Sertifikasi Internasional</h3>
                  <h4 class="mb-3">ASIC & AUN-QA</h4>
                  <p>Berbagai program studi kami telah tersertifikasi secara internasional, memastikan lulusan UM siap bersaing di pasar kerja global.</p>
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="features" class="features section light-background">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Fakultas Kami</h2>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-4">
          <div class="icon-list d-flex">
            <i class="bi bi-gear" style="color: #003366;"></i>
            <span>Fakultas <strong>Teknik</strong></span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-list d-flex">
            <i class="bi bi-briefcase" style="color: #003366;"></i>
            <span>Fakultas <strong>Ekonomi & Bisnis</strong></span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-list d-flex">
            <i class="bi bi-book" style="color: #003366;"></i>
            <span>Fakultas <strong>Sastra</strong></span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-list d-flex">
            <i class="bi bi-microscope" style="color: #003366;"></i>
            <span>Fakultas <strong>MIPA</strong></span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-list d-flex">
            <i class="bi bi-person-workspace" style="color: #003366;"></i>
            <span>Fakultas <strong>Ilmu Pendidikan</strong></span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-list d-flex">
            <i class="bi bi-activity" style="color: #003366;"></i>
            <span>Fakultas <strong>Ilmu Keolahragaan</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?= $this->endSection() ?>