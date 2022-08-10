<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META TAGS -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/Logo.png" type="images/png">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?v=<?php time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/global.css?v=<?php time(); ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/berita.css?v=<?php time(); ?>">

  <!-- TITLE PAGE -->
  <title><?php echo $title; ?></title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img src="<?php echo base_url(); ?>assets/images/Logo.png" alt="Logo Pemkab Malang" class="brand-img">
        <span class="navbar-title">PEMERINTAH DESA KARANGNONGKO</span>
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-menu me-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- Menu Beranda -->
          <li class="nav-item">
            <a class="nav-link fs-5" aria-current="page" href="<?php echo base_url(''); ?>">Beranda</a>
          </li>

          <!-- Menu Berita -->
          <li class="nav-item mx-md-4">
            <a class="nav-link fs-5" href="<?php echo base_url('news'); ?>">Berita</a>
          </li>

          <!-- Menu UMKM -->
          <li class="nav-item me-md-4">
            <a href="<?php echo base_url('umkm'); ?>" class="nav-link fs-5">UMKM</a>
          </li>

          <!-- Menu Profil -->
          <li class="nav-item">
            <a href="<?php echo base_url('profile'); ?>" class="nav-link fs-5">Profil</a>
          </li>
        </ul>

        <!-- Search icon -->
        <form action="<?php echo base_url('cariSemua'); ?>" method="get" class="d-flex mx-md-4" id="search">
          <input class="form-control" type="text" name="keyword" id="" placeholder="CARI DISINI" class="p-2" required>
          <button type="submit" class="btn btn-search btn-light ms-1">
            <i class="bi bi-search text-black"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End of NAVBAR -->

  <!-- MAIN CONTENTS -->
  <div id="main-content" class="mb-5">
    <section class="container mt-5 mb-5">
      <div class="d-flex mt-5">
        <div class="me-auto">
          <p class="page-title">BERITA DESA KARANGNONGKO</p>
        </div>

        <div class="ms-auto">
          <div class="form-group has-search ms-auto">
            <form action="<?php echo base_url('cariBerita'); ?>" method="get">
              <span class="bi bi-search search-icon position-absolute d-block text-center fs-3 pe-auto" style="color: #9A9EA6; padding-left: 15px;"></span>
              <input class="form-control" type="text" name="keyword" id="" placeholder="CARI BERITA" style="max-width: 420px; height: 42px; padding-left: 50px; background-color: transparent; border-radius: 21px; border-width: 1px; border-color: #9A9EA6;">
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWS LIST -->
    <div class="container">
      <div class="row g-3">
        <?php
        $alternative = $this->berita->getAll();
        foreach ($alternative as $row) : ?>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-body" style="border-style: solid; border-width: 1px; border-radius: 20px; border-color: #909A9B;">
            <a data-toggle="modal" data-target="#myModal">
              <img src="<?php echo base_url(); ?>assets/images/news/<?= $row->gambarBerita; ?>" height="250px" class="card-img-top p-2" style=" width: 350; height: 175; margin-left: auto; margin-right: auto;" alt="Card Image">
              </a>
              <div class="card-body">
                <?php if (strlen($row->judul) <= 75) : ?>
                  <p class="card-title" style="text-align: center; font-size: 14px;"><b><?= $row->judul ?></b></p>
                <?php else : ?>
                  <p class="card-title" style="text-align: center; font-size: 14px;"><b><?= substr($row->judul, 0, 75) . " ..." ?></b></p>
                <?php endif; ?>
                <?php if (strlen($row->deskripsi) <= 200) : ?>
                  <p class="card-text" style="font-size: 12px;"><?= $row->deskripsi ?></p>
                <?php else : ?>
                  <p class="card-text" style="font-size: 12px;"><?= substr($row->deskripsi, 0, 200) . " ..." ?></p>
                <?php endif; ?>
                <div class="d-flex justify-content-center align-items-center">
                  <button type="button" class="btn" style="background: #125159; border-radius: 30px;">
                    <a class="text-decoration-none" href="<?php echo base_url('berita/' . $row->idBerita); ?>" style="color: #fff;">Baca Selengkapnya</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="assets/images/news/<?= $row->gambarBerita; ?>" alt="Card Image">
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- End of MAIN CONTENTS -->

  <!-- FOOTER -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <!-- Logo Pemkab Malang -->
          <div id="footer-logo" class="col-lg-4 col-md-6 d-flex justify-content-start">
            <a href="<?php echo base_url(''); ?>">
              <img src="assets/images/Logo.png" alt="Logo Kab Malang" class="img-fluid" id="">
            </a>
          </div>

          <!-- Social Media Links -->
          <div id="footer-links" class="col-lg-4 col-md-6 p-5">
            <p class="title-followus">Follow Us</p>
            <ul id="social-media">
              <li>
                <a id="social-media-icons" href="https://wwww.facebook.com/" target="_blank">
                  <i class="bi bi-facebook"></i>
                  <span class="ms-1">Facebook</span>
                </a>
              </li>
              <li class="my-3">
                <a id="social-media-icons" href="https://www.instagram.com/" target="_blank">
                  <i class="bi bi-instagram"></i>
                  <span class="ms-1">Instagram</span>
                </a>
              </li>
              <li class="mb-3">
                <a id="social-media-icons" href="https://twitter.com/" target="_blank">
                  <i class="bi bi-twitter"></i>
                  <span class="ms-1">Twitter</span>
                </a>
              </li>
              <li>
                <a id="social-media-icons" href="https://www.youtube.com/" target="_blank" style="color: #DFE5E6;">
                  <i class="bi bi-youtube"></i>
                  <span class="ms-1">YouTube</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- End of Social Media Links -->

          <!-- Contact Us -->
          <div id="footer-contact" class="col-lg-4 col-md-6 p-5">
            <p class="title-contacts">Hubungi Kami</p>
            <div class="contacts">
              <div class="nomor-telp">
                <p>+62 822-4238-6861</p>
              </div>
              <div class="alamat">
                <p>Jl. Raya Nongkosewu, Karangnongko</p>
              </div>
              <div class="daerah">
                <p>Poncokusumo, Malang</p>
              </div>
              <div class="email">
                <p>support@karangnongko.id</p>
              </div>
            </div>
          </div>
          <!-- End of Contact Us -->
        </div>
      </div>
    </div>
    <div class="lines" style="border-bottom: 1px solid #1E2833;"></div>
    <div class="footer-bottom container text-center" id="copyright">
      Copyright &copy; 2022. Desa Karangnongko Poncokusumo Malang. All rights reserved.<br>
      <span>Created by KKN Kelompok 7 FILKOM UB 2022</span>
    </div>
  </footer>
  <!-- End of FOOTER -->

  <!-- JS LINKS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- End of JS LINKS -->
</body>

</html>