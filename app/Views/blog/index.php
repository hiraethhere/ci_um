<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<main class="main">

  <div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/blog-page-title-bg.jpg') ?>);">
    <div class="container">
      <h1>Portal Berita UM</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?= base_url('/') ?>">Beranda</a></li>
          <li class="current">Berita</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="blog" class="blog section">
    <div class="container">
      <div class="row gy-4">

        <?php foreach ($posts as $post) : ?>
        <div class="col-lg-4 col-md-6">
          <article>
            <div class="post-img">
              <img src="<?= base_url('assets/img/blog/' . $post['image']) ?>" alt="" class="img-fluid">
            </div>
            <p class="post-category">Berita Kampus</p>
            <h2 class="title">
              <a href="#"><?= $post['title'] ?></a>
            </h2>
            <div class="d-flex align-items-center">
              <div class="post-meta">
                <p class="post-date"><?= $post['date'] ?></p>
              </div>
            </div>
          </article>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

</main>
<?= $this->endSection() ?>