<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Universitas Negeri Malang - Excellence in Learning Innovation</title>

  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
        <h1 class="sitename">UM</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('/') ?>" class="active">Beranda</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Akademik</a></li>
          <li><a href="#">Fakultas</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <?= $this->renderSection('content') ?>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <footer id="footer" class="footer light-background">

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
            <span class="sitename">Universitas Negeri Malang</span>
          </a>
          <p>The Learning University. Unggul dan Menjadi Rujukan dalam Inovasi Pembelajaran yang diakui secara nasional maupun internasional.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/UM_1954" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://facebook.com/UniversitasNegeriMalang" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/universitasnegerimalang" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://youtube.com/c/UniversitasNegeriMalangUM" target="_blank"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Tautan Penting</h4>
          <ul>
            <li><a href="<?= base_url('/') ?>">Beranda</a></li>
            <li><a href="#">Profil Kampus</a></li>
            <li><a href="#">Sistem Informasi</a></li>
            <li><a href="#">Perpustakaan</a></li>
            <li><a href="#">Penerimaan MABA</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan Digital</h4>
          <ul>
            <li><a href="https://siakad.um.ac.id" target="_blank">SIAKAD</a></li>
            <li><a href="https://sipejar.um.ac.id" target="_blank">SIPEJAR</a></li>
            <li><a href="#">Email Mahasiswa</a></li>
            <li><a href="#">E-Journal</a></li>
            <li><a href="#">Karir Alumni</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          <p>Jl. Semarang No.5, Sumbersari</p>
          <p>Kec. Lowokwaru, Kota Malang</p>
          <p>Jawa Timur 65145</p>
          <p class="mt-4"><strong>Telepon:</strong> <span>(0341) 551312</span></p>
          <p><strong>Email:</strong> <span>info@um.ac.id</span></p>
        </div>

      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Universitas Negeri Malang</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer>

  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>